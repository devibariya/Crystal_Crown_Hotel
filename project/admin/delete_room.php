<html>
    <head>
        <title>Room</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php
   
     $room_id = $_REQUEST['id'];
   
     $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
     
     $que= "DELETE FROM `room_manage` WHERE Room_id = '$room_id'"; 

     
     if (mysqli_query($con, $que)) {
        echo "<script>alert('Room deleted successfully!'); window.location.href='view_rooms.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }






  
 
  
  ?>
