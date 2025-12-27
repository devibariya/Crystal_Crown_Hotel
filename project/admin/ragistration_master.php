<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="images/title.png" rel="icon">
    <link rel="stylesheet" href="design.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    </body>
</html>
<?php
include ("header.php");
    $con=mysqli_connect("localhost","root","","crystal_crown_hotel");
    $que="SELECT * FROM `signup`";
   $result= mysqli_query($con,$que); 
    echo"<center><h1><br><br>Registration-detail</h1>
    <table  border='2px'>
        <tr>
            <th>Register id</th>
            <th>Full-name</th>
            <th>Email</th>
            <th>Mobile no</th>
            <th>Username</th>
            <th>Password</th>
            <th>Confirm password</th>
            <th>Delete</th>
            </tr>";

            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td>$row[5]</td>
                    <td>$row[6]</td>
                    <td><a href='ragistration_delete.php?id=$row[0]'>Delete</a></td>
                  
                    </tr>";

            }
            echo"</table></center>";

            echo "<center></center><div class='btn'>
    <a href='index.php'><i class='fas fa-home'></i>Home</a>
	</div></center>";
            include("footer.php");
    ?>