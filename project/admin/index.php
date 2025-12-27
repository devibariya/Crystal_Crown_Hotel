<?php
include 'header.php';
session_start();
if (!isset($_SESSION["admin_username"])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Crystal Crown Hotel</title>
   <link href="images/title.png" rel="icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Google Fonts + Material Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f8f9fa;
      color: #333;
      min-height: 100vh;
    }

   /* .admin-header {
      background-color: #0e2737;
      padding: 20px;
      text-align: center;
      color: #fff;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }*/

    .welcome {
      text-align: center;
      padding: 150px 15px 10px;
      font-size: 25px;
      color: #0e2737;
    }

    .card-grid {
      padding: 70px 20px;
    }

    .dashboard-card {
      background-color: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      padding: 30px 20px;
      text-align: center;
      transition: all 0.3s ease-in-out;
      cursor: pointer;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
    }

    .dashboard-card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.6);
    }
    .material-icons-outlined:hover{
       background-color: #0e2737;
  transform: scale(1.05);
    }
    .dashboard-card .material-icons-outlined {
      font-size: 48px;
      color: #1cc3b2;
      margin-bottom: 10px;
    }

    .dashboard-card a {
      text-decoration: none;
      color: #0e2737;
      font-weight: 600;
      font-size: 18px;
      display: block;
      margin-top: 10px;
    }

    

    @media (max-width: 576px) {
      .admin-header {
        font-size: 22px;
      }
      .welcome {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

 

   <div class="welcome">
    Welcome, <?php echo htmlspecialchars($_SESSION["admin_username"]); ?>!
  </div>

  <div class="container card-grid">
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">login</span>
          <a href="login_master.php">Login Master</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">how_to_reg</span>
          <a href="ragistration_master.php">Registration</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">hotel</span>
          <a href="view_rooms.php">Rooms</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">book_online</span>
          <a href="booking_master.php">Room Booking</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">local_offer</span>
          <a href="facility_master.php">Facilities</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">groups</span>
          <a href="hotel_staf_view.php">Hotel Staff</a>
        </div>
      </div>

     <div class="col-sm-6 col-lg-3">
  <div class="dashboard-card">
    <span class="material-icons-outlined">restaurant</span>
    <a href="food_order.php">Food Order</a>
  </div>
</div>



      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">feedback</span>
          <a href="feedback_view.php">Feedback</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="dashboard-card">
          <span class="material-icons-outlined">logout</span>
          <a href="admin_login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

</body>
<?php include 'footer.php';?>
</html>
