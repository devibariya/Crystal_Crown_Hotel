<html>
    <head>
        <title>Feedback</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php
 

     $feed_id = $_REQUEST['id'];
   
     $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
     
     $que= "DELETE FROM `feedback` WHERE feed_id = '$feed_id'"; 

     
     if (mysqli_query($con, $que)) {
        echo "<script>alert('Room deleted successfully!'); window.location.href='feedback_view.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }






  
 
  
  ?>
