   <?php
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get order id from POST
$order_id = isset($_POST['order_id']) ? intval($_POST['order_id']) : 0;
$booking_id = isset($_POST['booking_id']) ? intval($_POST['booking_id']) : 0;

if ($order_id <= 0 || $booking_id <= 0) {
    die("Invalid data.");
}

// Update breakfast order with booking_id
$sql = "UPDATE breakfast_orders SET booking_id = $booking_id WHERE id = $order_id";
if (mysqli_query($conn, $sql)) {
    header("Location: breakfast_bill.php?id=$order_id"); // Redirect back
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

    <!DOCTYPE html>
    <html>
    <head>
    <title>Link Breakfast Order</title>
    <link href="images/title.png" rel="icon">
    </head>
    <body>
    <h2>Link Breakfast Order to Booking</h2>
    <form method="POST">
        <label>Select Booking:</label>
        <select name="booking_id" required>
            <?php while ($row = mysqli_fetch_assoc($booking_result)) { ?>
                <option value="<?= $row['booking_id'] ?>">#<?= $row['booking_id'] ?> - <?= htmlspecialchars($row['fullname']) ?></option>
            <?php } ?>
        </select>
        <br><br>
        <button type="submit">Link</button>
    </form>
    </body>
    </html>
