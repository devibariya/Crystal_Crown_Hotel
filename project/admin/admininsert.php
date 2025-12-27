<html>
    <head>
        <title>Admin</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
<?php

 $u_nm=$_POST["username"];     
    $pw=$_POST["password"];

    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
    
    $que="INSERT INTO admin_login (`username`, `password`) VALUES ('$u_nm', '$pw')";
   
     
    if (mysqli_query($con, $que)) {
        echo "<script>alert('Login successfully!'); window.location.href='login_master.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    ?>