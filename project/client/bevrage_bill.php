<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get order id
$orderId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($orderId <= 0) {
    die("Invalid Beverages order ID.");
}

// Fetch order details
$sql = "SELECT * FROM beverages_orders WHERE id = $orderId";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Beverages order not found.");
}
$order = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Beverages Bill</title>
<link rel="stylesheet" href="food_bill_design.css"><!-- External CSS -->

</head>
<body>
<div class="container">
<button id="printBtn">🖨️ Print</button>
<div class="header">
<h1>Crystal Crown Hotel</h1>
<p>Luxury Redefined • Comfort Guaranteed</p>
<p>Near Girnar Darwaja,Taleti Rd,<br>Mullawada,Junagadh,Gujarat | +91 98765 43210</p>
</div>

<hr>

<div class="section">
<div class="section-title">Customer Details</div>
<div class="info-grid">
<div class="info-item"><strong>Name:</strong><?= htmlspecialchars($order['customer_name']) ?></div>
<div class="info-item"><strong>Room No:</strong><?= htmlspecialchars($order['room_number']) ?></div>
</div>
</div>

<div class="section">
<div class="section-title">Beverage Details</div>
<div class="info-grid">
<div class="info-item"><strong>Item:</strong><?= htmlspecialchars($order['item']) ?></div>
<div class="info-item"><strong>Quantity:</strong><?= $order['quantity'] ?></div>
<div class="info-item"><strong>Price per Item:</strong> ₹<?= number_format($order['price'], 2) ?></div>
<div class="info-item"><strong>Order Time:</strong><?= $order['order_time'] ?></div>
</div>
</div>

<div class="total-box">
      Total: ₹<?= number_format($order['total'], 2) ?>
</div>

<div class="footer">
<p>Thank you for ordering with Crystal Crown Hotel 🍹</p>
<p>We hope you enjoy your beverage.</p>
</div>
</div>

<script>
    document.getElementById('printBtn').addEventListener('click', function() {
      window.print();
    });
</script>
</body>
</html>
<?php mysqli_close($conn); ?>




