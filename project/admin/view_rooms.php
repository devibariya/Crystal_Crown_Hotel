<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="images/title.png" rel="icon">
    <style>
        .btn {
            text-align: center;
            margin-top: 30px;
        }
    </style>
    <link rel="stylesheet" href="design.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
   
</head>
<body>
    
</body>
</html>

<?php
include 'header.php';
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
$que="select * from room_manage";
  $result=mysqli_query($con,$que);

  echo"<h1 align='center'><br> <br>Room-detail</h1>";

  echo"<table  align='center' border='2px'>
        <tr>
            <th>Room id</th>
            <th>Room type</th>
            <th>Room Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
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
                    
                    <td><img src='images/{$row['image']}' width='100' height='100'></td>
                    
                   <td> <a href='delete_room.php?id=$row[0]'>delete</a></td>
                    

                    
                    </tr>";
            }
            echo"</table>";
             echo "<section class='btn'>
                   <a href='index.php'><i class='fas fa-home'></i>Home</a>
                   <a href='room_manage.html'><i class='fas fa-user-plus'></i>Insert room</a>
                   </section>";
            
              include("footer.php");
    ?>



