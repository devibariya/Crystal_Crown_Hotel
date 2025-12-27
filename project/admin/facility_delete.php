<html>
    <head>
        <title>Facility</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php

// Get facility ID from URL
$facilityId = $_REQUEST['id'];

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete query
$query = "DELETE FROM `facilities` WHERE `id` = '$facilityId'";

// Execute and redirect
if (mysqli_query($con, $query)) {
    echo "<script>alert('Facility deleted successfully!'); window.location.href='facility_master.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}
?>
