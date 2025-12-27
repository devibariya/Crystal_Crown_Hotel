<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Escape values for safety
    $name     = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $room     = mysqli_real_escape_string($conn, $_POST['room_number']);
    $item     = mysqli_real_escape_string($conn, $_POST['item']);
    $price    = (int)$_POST['price'];
    $quantity = (int)$_POST['quantity'];
    $total    = $price * $quantity;

    // Insert data
    $sql = "INSERT INTO beverages_orders (customer_name, room_number, item, quantity, price, total) 
            VALUES ('$name','$room','$item','$quantity','$price','$total')";

    if (mysqli_query($conn, $sql)) {
    $orderId = mysqli_insert_id($conn); // last inserted ID
    echo "<script>
            alert('Beverage ordered successfully!');
            window.location.href='bevrage_bill.php?id=$orderId';
          </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beverages Order</title>
  <link href="images/title.png" rel="icon">
   <link rel="stylesheet" href="food_design.css">
 
  <script>
    function updatePrice() {
      let item = document.getElementById("item").value;
      let price = 0;

      switch(item) {
        case "Tea": price = 40; break;
        case "Coffee": price = 50; break;
        case "Cold Coffee": price = 70; break;
        case "Fresh Juice": price = 90; break;
        case "Soft Drink": price = 60; break;
        case "Milkshake": price = 120; break;
        case "Lassi": price = 80; break;
        case "Mocktail": price = 150; break;
        default: price = 0;
      }

      document.getElementById("price").value = price;
      calculateTotal();
    }

    function calculateTotal() {
      let price = parseInt(document.getElementById("price").value) || 0;
      let qty   = parseInt(document.getElementById("quantity").value) || 1;
      let total = price * qty;
      document.getElementById("total").value = total;
    }
  </script>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container1">
    
    <form method="POST" action="">
      <h2>🥤 Beverages Order</h2>
      <label>Customer Name:</label>
      <input type="text" name="customer_name" required>

      <label>Room Number:</label>
      <input type="text" name="room_number" required>

      <label>Select Beverage:</label>
      <select name="item" id="item" onchange="updatePrice()" required>
        <option value="">-- Choose a Beverage --</option>
        <option value="Tea">Tea</option>
        <option value="Coffee">Coffee</option>
        <option value="Cold Coffee">Cold Coffee</option>
        <option value="Fresh Juice">Fresh Juice</option>
        <option value="Soft Drink">Soft Drink</option>
        <option value="Milkshake">Milkshake</option>
        <option value="Lassi">Lassi</option>
        <option value="Mocktail">Mocktail</option>
      </select>

      <label>Price (₹):</label>
      <input type="text" name="price" id="price" readonly>

      <label>Quantity:</label>
      <input type="number" name="quantity" id="quantity" value="1" min="1" onchange="calculateTotal()">

      <label>Total (₹):</label>
      <input type="text" id="total" readonly>

      <input type="submit" name="submit" value="Order">
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
