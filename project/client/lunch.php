<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $room = $_POST['room_number'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;

    // Insert data
    $que = "INSERT INTO lunch_orders (customer_name, room_number, item, quantity, price, total) 
            VALUES ('$name','$room','$item','$quantity','$price','$total')";

   if (mysqli_query($conn, $que)) {
    $orderId = mysqli_insert_id($conn); // last inserted ID
    echo "<script>
            alert('Lunch ordered successfully!');
            window.location.href='lunch_bill.php?id=$orderId';
          </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Order</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="food_design.css">
    <link rel="stylesheet" href="food_design.css">
    
    <script>
        function updatePrice() {
            let item = document.getElementById("item").value;
            let price = 0;

            switch(item) {
                case "Veg Thali": price = 150; break;
                case "Paneer Butter Masala": price = 180; break;
                case "Chicken Curry": price = 220; break;
                case "Dal Fry": price = 120; break;
                case "Roti (2 pcs)": price = 30; break;
                case "Rice Plate": price = 100; break;
                default: price = 0;
            }

            document.getElementById("price").value = price;
        }
    </script>
</head>
<body>
     <?php include 'header.php'; ?>
    <div class="container1">
      
        <form method="POST" action="lunch.php">
              <h2>🍛 Lunch Order</h2>
            <label>Customer Name:</label>
            <input type="text" name="customer_name" required>

            <label>Room Number:</label>
            <input type="text" name="room_number" required>

            <label>Select Item:</label>
            <select name="item" id="item" onchange="updatePrice()" required>
                <option value="">-- Choose a Lunch Item --</option>
                <option value="Veg Thali">Veg Thali</option>
                <option value="Paneer Butter Masala">Paneer Butter Masala</option>
                <option value="Chicken Curry">Chicken Curry</option>
                <option value="Dal Fry">Dal Fry</option>
                <option value="Roti (2 pcs)">Roti (2 pcs)</option>
                <option value="Rice Plate">Rice Plate</option>
            </select>

            <label>Price (₹):</label>
            <input type="text" name="price" id="price" readonly>

            <label>Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1">

            <input type="submit" name="submit" value="Order">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
