<?php
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

// Get order ID from URL
$orderId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($orderId <= 0) die("Invalid order ID.");

// Fetch breakfast order
$sql = "SELECT * FROM breakfast_orders WHERE id = $orderId";
$result = mysqli_query($conn, $sql);
if (!$result || mysqli_num_rows($result) == 0) die("Breakfast order not found.");
$order = mysqli_fetch_assoc($result);

// Try to find booking by matching customer name
$customerName = mysqli_real_escape_string($conn, $order['customer_name']);
$booking = null;
if (!$order['booking_id']) {
    $booking_sql = "SELECT * FROM booking WHERE fullname = '$customerName' LIMIT 1";
    $booking_result = mysqli_query($conn, $booking_sql);
    if ($booking_result && mysqli_num_rows($booking_result) > 0) {
        $booking = mysqli_fetch_assoc($booking_result);

        // Auto-link breakfast order to booking
        $update_sql = "UPDATE breakfast_orders SET booking_id = ".$booking['booking_id']." WHERE id = $orderId";
        mysqli_query($conn, $update_sql);

        // Update order array
        $order['booking_id'] = $booking['booking_id'];
    }
} else {
    // If already linked, fetch booking details
    $booking_sql = "SELECT * FROM booking WHERE booking_id = ".$order['booking_id'];
    $booking_result = mysqli_query($conn, $booking_sql);
    if ($booking_result && mysqli_num_rows($booking_result) > 0) {
        $booking = mysqli_fetch_assoc($booking_result);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Breakfast Bill</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .bill-container { max-width: 600px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px; }
        .bill-container h2 { text-align: center; color: #00796b; }
        .info { margin: 8px 0; }
        .total { font-weight: bold; font-size: 1.2em; margin-top: 15px; text-align: center; }
        button { padding: 8px 12px; margin-top: 15px; display:block; margin:auto; }
    </style>
</head>
<body>
<div class="bill-container">
    <h2>🥞 Breakfast Bill</h2>
    <div class="info"><b>Customer Name:</b> <?= htmlspecialchars($order['customer_name']) ?></div>
    <div class="info"><b>Room Number:</b> <?= htmlspecialchars($order['room_number']) ?></div>
    <div class="info"><b>Item:</b> <?= htmlspecialchars($order['item']) ?></div>
    <div class="info"><b>Quantity:</b> <?= $order['quantity'] ?></div>
    <div class="info"><b>Price per Item:</b> ₹<?= number_format($order['price'],2) ?></div>
    <div class="info"><b>Total:</b> ₹<?= number_format($order['total'],2) ?></div>
    <div class="info"><b>Order Time:</b> <?= $order['order_time'] ?></div>

    <?php if ($booking): ?>
        <hr>
        <h3>Linked Booking Details</h3>
        <div class="info"><b>Booking ID:</b> <?= $booking['booking_id'] ?></div>
        <div class="info"><b>Room Type:</b> <?= htmlspecialchars($booking['room_type']) ?></div>
        <div class="info"><b>Check-in:</b> <?= $booking['check_in'] ?></div>
        <div class="info"><b>Check-out:</b> <?= $booking['check_out'] ?></div>
        <div class="info"><b>Total Nights:</b> <?= (new DateTime($booking['check_in']))->diff(new DateTime($booking['check_out']))->days ?></div>
        <div class="info"><b>Total Booking Amount:</b> ₹<?= number_format($booking['total'],2) ?></div>
    <?php else: ?>
        <div class="info" style="color:red; font-weight:bold;">No matching booking found for this customer.</div>
    <?php endif; ?>

    <button onclick="window.print()">🖨️ Print Bill</button>
</div>
</body>
</html>
<?php mysqli_close($conn); ?>
