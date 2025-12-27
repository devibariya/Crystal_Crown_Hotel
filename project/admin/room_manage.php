<html>
    <head>
        <title>Room</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>

<?php
// DB connection
 echo"<link href='img/favicon.ico' rel='icon'>";
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $type = $_POST['room_type'];
    $room_cat=$_POST['room_cat'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
   
    $status = $_POST['status'];

    // Handle image upload
    $img_name = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $dest = $img_name;
    move_uploaded_file($tmp, $dest);

    // Insert into database
    $query = "INSERT INTO room_manage (room_type,Room_category, description, price,status, image)
              VALUES ('$type','$room_cat', '$desc', $price,'$status', '$dest')";
    
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Room added successfully!'); window.location.href='view_rooms.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
