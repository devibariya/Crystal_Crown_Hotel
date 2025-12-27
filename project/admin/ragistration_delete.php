<html>
    <head>
        <title>Registration</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php
 
    $rg_id = $_REQUEST["id"];
   
    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
   
    $que="DELETE FROM `signup` WHERE registaration_id=$rg_id";
   
    if (mysqli_query($con, $que)) {
        echo "<script>alert('Regstarion deleted successfully!'); window.location.href='ragistration_master.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
      
    echo "<a href='ragistration_master.php'>view a data</a>";
?>