<html>
    <head>
        <title>Staff</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php

$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $staff_id = intval($_GET['id']); 

    
    $sql = "DELETE FROM staff WHERE staff_id = $staff_id";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Staff record deleted successfully.'); window.location.href='hotel_staf_view.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}


mysqli_close($con);
?>
