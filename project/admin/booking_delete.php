<html>
  <head>
    <title>Booking</title>
    <link href="images/title.png" rel="icon">
  </head>
</html>
<?php
  
    $unm = $_REQUEST['id'];
  
    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
    
    $que="DELETE FROM `booking` WHERE `booking_id`='$unm'";
   
     if (mysqli_query($con, $que)) {
        echo "<script>alert('Booking deleted successfully!'); window.location.href='booking_master.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

   
    
?>