<html>
    <head>
        <title>Staff</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php

include 'header.php';
session_start();


$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$salary = $_POST['salary'];
$position = $_POST['position'];
$join_date = $_POST['join_date'];
$shift = $_POST['shift'];
$status = $_POST['status'];


$sql = "INSERT INTO staff (first_name, email, phone, department, salary, position, join_date, shift, status)
        VALUES ('$first_name', '$email', '$phone', '$department', '$salary', '$position', '$join_date', '$shift', '$status')";


if (mysqli_query($con, $sql)) {
    echo "<script>alert('Staff added successfully!'); window.location.href='hotel_staf_view.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}


mysqli_close($con);
?>
