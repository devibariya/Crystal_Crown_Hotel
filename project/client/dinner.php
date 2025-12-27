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
    $que = "INSERT INTO dinner_orders (customer_name, room_number, item, quantity, price, total) 
            VALUES ('$name','$room','$item','$quantity','$price','$total')";

    if (mysqli_query($conn, $que)) {
    $orderId = mysqli_insert_id($conn); // last inserted ID
    echo "<script>
            alert('Dinner ordered successfully!');
            window.location.href='dinner_bill.php?id=$orderId';
          </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Order</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="food_design.css">
    
    <script>
        function updatePrice() {
            let item = document.getElementById("item").value;
            let price = 0;

            switch(item) {
                case "Butter Naan (2 pcs)": price = 40; break;
                case "Paneer Tikka Masala": price = 200; break;
                case "Chicken Biryani": price = 250; break;
                case "Mutton Curry": price = 280; break;
                case "Fish Fry": price = 230; break;
                case "Vegetable Pulao": price = 150; break;
                default: price = 0;
            }

            document.getElementById("price").value = price;
        }
    </script>
</head>
<body>
     <?php include 'header.php'; ?>
    <div class="container1">
        
        <form method="POST" action="">
            <h2>🍽 Dinner Order</h2>
            <label>Customer Name:</label>
            <input type="text" name="customer_name" required>

            <label>Room Number:</label>
            <input type="text" name="room_number" required>

            <label>Select Item:</label>
            <select name="item" id="item" onchange="updatePrice()" required>
                <option value="">-- Choose a Dinner Item --</option>
                <option value="Butter Naan (2 pcs)">Butter Naan (2 pcs)</option>
                <option value="Paneer Tikka Masala">Paneer Tikka Masala</option>
                <option value="Chicken Biryani">Chicken Biryani</option>
                <option value="Mutton Curry">Mutton Curry</option>
                <option value="Fish Fry">Fish Fry</option>
                <option value="Vegetable Pulao">Vegetable Pulao</option>
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
