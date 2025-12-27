<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Manage Facilities</title>
<link href="images/title.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
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
    }

    .facility-img {
      width: 100px;
      height: 100px;
    }
  </style>
  <link href="images/title.png" rel="icon">
</head>
<body>

  
</body>
</html>
<?php
include 'header.php';
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
$que = "SELECT * FROM `facilities`";
$data = mysqli_query($con, $que);
 echo"<center>
<h1><br><br>Facility Management</h1></center>";

   echo"<table border='2px'>
        <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Image</th>
      <th>Delete</th>
    </tr>";

   while($row=mysqli_fetch_array($data)) {
  echo "<tr>
    <td>" . $row[0] . "</td>
    <td>" . htmlspecialchars($row[1]) . "</td>
    <td>" . htmlspecialchars($row[2]) . "</td>
    <td><img src='images/" . htmlspecialchars($row[3]) . "' class='facility-img' alt='" . htmlspecialchars($row[1]) . "'>
</td>

    <td><a href='facility_delete.php?id=" . $row[0] . "'>Delete</a></td>
  </tr>";
}
echo "</table>";
 echo "<section class='btn'>
                   <a href='index.php'><i class='fas fa-home'></i>Home</a>
                    <a href='facility_insert.php'><i class='fas fa-user-plus'></i>Insert</a>
                   </section>";

   include("footer.php");


?>