<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
     <link href="images/title.png" rel="icon">
    <style>
        .btn {
            text-align: center;
            margin-top: 30px;
        }
        </style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="design.css" />
    
</head>
<body>
    
</body>
</html>


<?php
include 'header.php';
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
$que="select * from feedback";
  $result=mysqli_query($con,$que);

  echo"<h1 align='center'><br><br> Feedback Details</h1>";

  echo"<table  align='center' border='2px'>
        <tr>
            <th>Feedback id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Room no</th>
            <th>Rating</th>
            <th>Message</th>
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
                    
                   <td> <a href='feedback_delete.php?id=$row[0]'>delete</a></td>
                    

                    
                    </tr>";
            }
            echo"</table>";
           echo "<section class='btn'>
                   <a href='index.php'><i class='fas fa-home'></i>Home</a>
                   </section>";
              include("footer.php");
    ?>



