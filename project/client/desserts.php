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
    $sql = "INSERT INTO desserts_orders (customer_name, room_number, item, quantity, price, total) 
            VALUES ('$name','$room','$item','$quantity','$price','$total')";

   if (mysqli_query($conn, $sql)) {
    $orderId = mysqli_insert_id($conn); // last inserted ID
    echo "<script>
            alert('Dessert ordered successfully!');
            window.location.href='dessert_bill.php?id=$orderId';
          </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desserts Order</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="food_design.css">
    
    <script>
        function updatePrice() {
            let item = document.getElementById("item").value;
            let price = 0;

            switch(item) {
                case "Gulab Jamun (2 pcs)": price = 50; break;
                case "Rasgulla (2 pcs)": price = 40; break;
                case "Ice Cream (Single Scoop)": price = 70; break;
                case "Chocolate Brownie": price = 120; break;
                case "Cheesecake": price = 180; break;
                case "Fruit Salad": price = 90; break;
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
            <h2>🍨 Desserts Order</h2>
            <label>Customer Name:</label>
            <input type="text" name="customer_name" required>

            <label>Room Number:</label>
            <input type="text" name="room_number" required>

            <label>Select Dessert:</label>
            <select name="item" id="item" onchange="updatePrice()" required>
                <option value="">-- Choose a Dessert --</option>
                <option value="Gulab Jamun (2 pcs)">Gulab Jamun</option>
                <option value="Rasgulla (2 pcs)">Rasgulla</option>
                <option value="Ice Cream (Single Scoop)">Ice Cream </option>
                <option value="Chocolate Brownie">Chocolate Brownie </option>
                <option value="Cheesecake">Cheesecake </option>
                <option value="Fruit Salad">Fruit Salad</option>
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
