<!DOCTYPE html>
<html lang="en">
<head>
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Details</title>
    <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="design.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
<body>
  
<?php
include 'header.php';
 echo"<center><h1><br><br>Login-detail</h1>";
    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
    $que=" SELECT * FROM `admin_login`";
    $data=mysqli_query($con,$que);
    
    echo"<table border='2px'>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Edit</th>
            </tr>";

            while($row=mysqli_fetch_array($data))
            {
                echo"<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td><a href='admin_login_delete.php?id=$row[0]'>Delete</a></td>
                    <td><a href='login_update.php?id=$row[0]'>Edit</a></td>
                    </tr>";
                    
            }
            
            
            echo"</table>";
			 echo "<div class='btn'>
    <a href='index.php'><i class='fas fa-home'></i> Home</a>
    <a href='admin_login_html.php'><i class='fas fa-user-plus'></i> Insert User</a>
</div>";

            
            
            include("footer.php");
?>
</body>
</html>