<?php
include 'header.php';

$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT staff_id, first_name, email, phone, department, salary, position, join_date, shift, status FROM staff";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Staff List</title>
     <link href="images/title.png" rel="icon">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts Cinzel -->
   
    <style>
    
    table {
  width: 100%;
  
  max-width: 1500px;
  margin: auto;
}

.btn {
            text-align: center;
            margin-top: 30px;
        }

  th, td {
    border: 1px solid #000;
    padding: 20px;
    height:50px;
    width:70px;
  }
</style>
<link rel="stylesheet" href="design.css" />

</head>
<body>



<table>
    <thead>
        <tr>
            <th>Staff ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Position</th>
            <th>Join Date</th>
            <th>Shift</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Update</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
         echo"<center>
    <h1 ><br><br> Staff Details</h1>
  </center>";
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["staff_id"] . "</td>";
                echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["department"]) . "</td>";
                echo "<td>" . number_format($row["salary"], 2) . "</td>";
                echo "<td>" . htmlspecialchars($row["position"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["join_date"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["shift"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["status"]) . "</td>";
                echo "<td><a href='delete_staff.php?id={$row['staff_id']}' onclick=\"return confirm('Are you sure you want to delete this staff member?');\">Delete</a></td>";
                echo "<td><a href='update_staff.php?id={$row['staff_id']}'>Update</a></td>";
            
          
            
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10' class='no-data'>No staff found</td></tr>";
        }

        
        mysqli_close($con);
       
        ?>
    </tbody>
</table>
<section class='btn'>
<a href='staf.html'><i class='fas fa-user-plus'></i>Insert Staff</a>
<a href="index.php"><i class='fas fa-home'></i>Home</a>
</section>
          <?php  include("footer.php");?>
</body>
</html>
