<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get order id
$orderId = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;
if ($orderId <= 0) {
    die("Invalid order ID.");
}

// Fetch breakfast order
$order_sql = "SELECT * FROM breakfast_orders WHERE id = $orderId";
$order_result = mysqli_query($conn, $order_sql);
if (!$order_result || mysqli_num_rows($order_result) == 0) {
    die("Breakfast order not found.");
}
$order = mysqli_fetch_assoc($order_result);

// If form submitted to link order to booking
if (isset($_POST['link_booking'])) {
    $booking_id = intval($_POST['booking_id']);
    $update_sql = "UPDATE breakfast_orders SET booking_id = $booking_id WHERE id = $orderId";
    if (mysqli_query($conn, $update_sql)) {
        header("Location: final_bill.php?order_id=$orderId");
        exit();
    } else {
        die("Error linking order: " . mysqli_error($conn));
    }
}

// Check if order is linked
$booking_id = $order['booking_id'];
$booking = null;
if ($booking_id) {
    $booking_sql = "SELECT * FROM booking WHERE booking_id = $booking_id";
    $booking_result = mysqli_query($conn, $booking_sql);
    if ($booking_result && mysqli_num_rows($booking_result) > 0) {
        $booking = mysqli_fetch_assoc($booking_result);
    }
}

// Get all bookings for linking form
$all_bookings = mysqli_query($conn, "SELECT booking_id, fullname FROM booking");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Final Bill</title>
<link href="img/favicon.ico" rel="icon">
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 20px;
    color: #333;
}
.container {
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 2rem;
    color: #1cc3b2;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.section {
    margin-bottom: 25px;
}
.section h3 {
    margin-bottom: 15px;
    font-size: 1.3rem;
    color: #1e2a38;
    border-bottom: 2px solid #1cc3b2;
    display: inline-block;
    padding-bottom: 3px;
}
.info-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 15px 30px;
}
.info-item {
    flex: 1 1 45%;
    background: #f0f8f7;
    padding: 12px 18px;
    border-radius: 8px;
}
.info-item strong {
    color: #1e2a38;
}
.food-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}
.food-table th, .food-table td {
    border: 1px solid #ddd;
    padding: 10px 12px;
    text-align: center;
}
.food-table th {
    background: #1cc3b2;
    color: #fff;
}
.food-table td {
    background: #f9f9f9;
}
.total {
    text-align: right;
    font-size: 1.5rem;
    font-weight: 700;
    margin-top: 20px;
    color: #1e2a38;
}
button {
    background: #1cc3b2;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    margin-top: 15px;
    transition: 0.3s;
}
button:hover {
    background: #17a598;
}
select {
    padding: 10px;
    border-radius: 6px;
    width: 100%;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}
@media (max-width: 600px) {
    .info-item { flex: 1 1 100%; }
}
</style>
</head>
<body>

<div class="container">
<h2>Final Bill</h2>

<?php if (!$booking): ?>
    <!-- Link form -->
    <form method="post">
        <label for="booking_id"><strong>Link this food order to Booking:</strong></label>
        <select name="booking_id" id="booking_id" required>
            <option value="">-- Select Customer Booking --</option>
            <?php while($b = mysqli_fetch_assoc($all_bookings)): ?>
                <option value="<?= $b['booking_id'] ?>"><?= htmlspecialchars($b['fullname']) ?> (ID: <?= $b['booking_id'] ?>)</option>
            <?php endwhile; ?>
        </select>
        <button type="submit" name="link_booking">Link & View Final Bill</button>
    </form>
<?php else: ?>
    <!-- Booking Info -->
    <div class="section">
        <h3>Booking Details</h3>
        <div class="info-grid">
            <div class="info-item"><strong>Customer:</strong> <?= htmlspecialchars($booking['fullname']) ?></div>
            <div class="info-item"><strong>Email:</strong> <?= htmlspecialchars($booking['email']) ?></div>
            <div class="info-item"><strong>Phone:</strong> <?= htmlspecialchars($booking['phone']) ?></div>
            <div class="info-item"><strong>Address:</strong> <?= htmlspecialchars($booking['Address']) ?></div>
            <div class="info-item"><strong>Room Type:</strong> <?= htmlspecialchars($booking['room_type']) ?></div>
            <div class="info-item"><strong>Room Category:</strong> <?= htmlspecialchars($booking['Room_category']) ?></div>
            <div class="info-item"><strong>Adults:</strong> <?= $booking['adult_count'] ?></div>
            <div class="info-item"><strong>Children:</strong> <?= $booking['children_count'] ?></div>
            <div class="info-item"><strong>Check-in:</strong> <?= $booking['check_in'] ?></div>
            <div class="info-item"><strong>Check-out:</strong> <?= $booking['check_out'] ?></div>
            <div class="info-item"><strong>Payment:</strong> <?= htmlspecialchars($booking['payment']) ?></div>
            
        </div>
    </div>

    <!-- Food Orders Table -->
    <div class="section">
        <h3>Food Orders</h3>
        <?php
        $food_sql = "SELECT * FROM breakfast_orders WHERE booking_id = $booking_id";
        $food_result = mysqli_query($conn, $food_sql);
        $grand_total_food = 0;
        if ($food_result && mysqli_num_rows($food_result) > 0): ?>
        <table class="food-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price (₹)</th>
                    <th>Total (₹)</th>
                </tr>
            </thead>
            <tbody>
                <?php while($food = mysqli_fetch_assoc($food_result)):
                    $grand_total_food += $food['total'];
                ?>
                    <tr>
                        <td><?= htmlspecialchars($food['item']) ?></td>
                        <td><?= $food['quantity'] ?></td>
                        <td><?= number_format($food['price'],2) ?></td>
                        <td><?= number_format($food['total'],2) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No food orders linked.</p>
        <?php endif; ?>
    </div>

    <!-- Grand Total -->
    <div class="total">Grand Total: ₹<?= number_format($booking['total'] + $grand_total_food, 2) ?></div>
    <div style="text-align:center;">
        <button onclick="window.print()">🖨️ Print Final Bill</button>
    </div>
<?php endif; ?>

</div>

</body>
</html>
<?php mysqli_close($conn); ?>
