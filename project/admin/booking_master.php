<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crystal Crown Hotel - Booking Details</title>
  <link href="images/title.png" rel="icon">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="design.css" />
  <style> body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', sans-serif;
      padding: 40px;
      color: #0e2737;
    }

    h2 {
      text-align: center;
      color: #1cc3b2;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px 16px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #1cc3b2;
      color: white;
    }

    tr:hover {
      background-color: #f0faff;
    }

    a {
      text-decoration: none;
      color: white;
      background-color: #0e2737;
      padding: 6px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    a:hover {
      background-color: #1cc3b2;
    }

    .btn-group {
      margin-top: 20px;
      text-align: center;
    }

    .btn-group a {
      margin: 0 10px;
    }</style>
</head>
<body>
 
<?php
include 'header.php';
  $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
  if (!$con) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }
  $que = "SELECT * FROM `booking`";
  $data = mysqli_query($con, $que);
   echo "<center><h1></br><br>Booking Details</h1></center>";
   echo "<table>
    <tr>
      <th> Room ID</th>
      <th> Full Name</th>
      <th> Address</th>
      <th> Email</th>
      <th> Mobile</th>
      <th> Room Type</th>
      <th> Category</th>
      <th> Adult</th>
      <th> Children</th>
      <th> Total</th>
      <th> Check In</th>
      <th> Check Out</th>
      <th> Request</th>
      <th> Payment</th>
      <th> Delete</th>
    </tr>";

  while ($row = mysqli_fetch_array($data)) {
    echo "<tr>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[3]</td>
      <td>$row[4]</td>
      <td>$row[5]</td>
      <td>$row[6]</td>
      <td>$row[7]</td>
      <td>$row[8]</td>
      <td>$row[9]</td>
      <td>$row[10]</td>
      <td>$row[11]</td>
      <td>$row[12]</td>
      <td>$row[13]</td>
      <td><a href='booking_delete.php?id=$row[0]'>Delete</a></td>
    </tr>";
  }

  echo "</table>";

  echo "<section class='btn'>
    <a href='index.php'><i class='fas fa-home'></i>Home</a>
  
  </section>";

  include("footer.php");
?>
</body>
</html>
