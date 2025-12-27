<html>
    <head>
        <title>Deluxe</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php

// 1. Connect to the database
$con=mysqli_connect("localhost","root","","crystal_crown_hotel");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. SQL query to get luxury rooms
$sql = "SELECT * FROM room_manage WHERE Room_type = 'Deluxe'";
$result = mysqli_query($con, $sql);

// 3. Display the results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row['Room_type'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "<p>Status: " . $row['status'] . "</p>";
        echo "<img src='images/" . $row['image'] . "' alt='Room Image' width='200'><hr>";
    }
} else {
    echo "No Dluxe rooms found.";
}

// 4. Close the connection
mysqli_close($con);
?>
