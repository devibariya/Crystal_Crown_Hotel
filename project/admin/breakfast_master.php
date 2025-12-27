<?php
include ("header.php");
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch breakfast orders
$result = mysqli_query($conn, "SELECT * FROM breakfast_orders ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Breakfast Orders</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="design.css" />
</head>
<body>
    
    <center><h1>

<br><br>  <img src="https://img.icons8.com/ios-filled/24/000000/tea.png" alt="Breakfast Icon" style="vertical-align: middle; margin-right: 10px;">Breakfast Orders Details
</h1></center>

    <table>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Room Number</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price (₹)</th>
            <th>Total (₹)</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['customer_name']}</td>
                    <td>{$row['room_number']}</td>
                    <td>{$row['item']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['total']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No breakfast orders found.</td></tr>";
        }
        ?>
    </table>
</body>
<?php include("footer.php"); ?>
<section class='btn'>
                   <a href='index.php'><i class='fas fa-home'></i>Home</a>
                  
                   </section>

</html>
