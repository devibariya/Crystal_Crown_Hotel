<html>
    <head>
        <title>Admin</title>
        <link href="images/title.png" rel="icon">
    </head>
    
</html>
<?php
  
    $unm = $_REQUEST['id'];
  
    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
    
    $que="DELETE FROM `admin_login` WHERE `id`='$unm'";
    
    if (mysqli_query($con, $que)) {
        echo "<script>alert('Login deleted successfully!'); window.location.href='login_master.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    
?>