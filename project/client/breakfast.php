<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

// When the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $room = $_POST['room_number'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;

    // Insert query
    $que = "INSERT INTO breakfast_orders (customer_name, room_number, item, quantity, price, total) 
            VALUES ('$name','$room','$item','$quantity','$price','$total')";

    if (mysqli_query($conn, $que)) {
    $orderId = mysqli_insert_id($conn); // last inserted ID
    echo "<script>
            alert('Breakfast ordered successfully!');
            window.location.href='brekfast_bill.php?id=$orderId';
          </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Order</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="food_design.css">

    
        

    <script>
        function updatePrice() {
            let item = document.getElementById("item").value;
            let price = 0;

            switch(item) {
                case "Pancakes": price = 80; break;
                case "Omelette": price = 100; break;
                case "Coffee": price = 50; break;
                case "Tea": price = 40; break;
                case "Toast": price = 60; break;
                default: price = 0;
            }

            document.getElementById("price").value = price;
        }
    </script>
    <style></style>
   
</head>
<body>
 <?php include 'header.php'; ?>
      <div class="page-wrapper">
     
      <main>
      <div class="container1">
       
    <form method="POST" action="" >
        <h2>🍛 Breakfast Order</h2>
        <label>Customer Name:</label>
        <input type="text" name="customer_name" required><br>

        <label>Room Number:</label>
        <input type="text" name="room_number" required><br>

        <label>Select Item:</label>
        <select name="item" id="item" onchange="updatePrice()" required>
            <option value="">-- Choose an Item --</option>
            <option value="Pancakes">Pancakes</option>
            <option value="Omelette">Omelette</option>
            <option value="Coffee">Coffee</option>
            <option value="Tea">Tea</option>
            <option value="Toast">Toast</option>
        </select><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1"><br><br>

        <label>Price (₹):</label>
        <input type="text" name="price" id="price" readonly><br><br>

        <input type="submit" name="submit" value="Order">
    </form>

    <?php 
    if($message != "") {
        echo "<p>$message</p>";
    }
    ?>
    </main>
    <?php include 'footer.php'; ?>
</div>
</body>

</html>
