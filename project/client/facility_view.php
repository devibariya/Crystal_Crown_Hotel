<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crystal Crown Hotel – Facilities</title>
  <link href="images/title.png" rel="icon">
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }
    body {
      background: white;
      color: black;
    }

     header {
      background: #1e2a38;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }


    .hero {
      position: relative;
      background: url('images/c.jpg') no-repeat center center/cover;
      height: 80vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.6);
    }

    .hero-content {
      position: relative;
      text-align: center;
      padding: 0 20px;
    }

    .hero-content h1 {
      font-size: 42px;
      margin-bottom: 15px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .hero-content p {
      font-family: 'Georgia', serif;
      font-size: 18px;
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.6;
    }

    .facility-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 2rem;
      max-width: 1200px;
      margin: auto;
      gap: 2rem;
    }

    .facility-card {
      width: 30%;
      background: white;
      border-radius: 4px;
      box-shadow: 0 2px 12px rgba(38, 237, 220, 0.2);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .facility-card:hover {
      transform: scale(1.03);
    }
    .facility-icons {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      background-color: white;
      padding: 30px 10px;
    }

    .icon-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 10px 15px;
      color: #1cc3b2;
    }

    .icon-box img {
      width: 60px;
      height: 60px;
      margin-bottom: 8px;
    }

    .icon-box span {
      font-size: 14px;
      font-weight: 500;
    }
    .facility-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .facility-details {
      padding: 1rem;
    }

    .facility-details h3 {
      color: #1cc3b2;
      margin-bottom: 0.5rem;
    }

    .facility-details p {
      font-size: 0.95rem;
      color: #333;
    }

    @media (max-width: 992px) {
      .facility-card {
        width: 45%;
      }
    }

    @media (max-width: 600px) {
      .facility-card {
        width: 100%;
      }
    }
    .breadcrumb-area {
     background: url('images/c.jpg') no-repeat center center/cover;
      height: 75vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    .breadcrumb-area::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
    }

    .breadcrumb-content {
      position: relative;
      z-index: 2;
    }

    .breadcrumb-content h1 {
      font-size: 3rem;
      margin-bottom: 10px;
      color: white;
    }

    .breadcrumb {
      background: transparent;
      padding: 0;
      margin: 0;
      display: inline-flex;
      list-style: none;
      color: #fff;
    }

    .breadcrumb li {
      margin: 0 5px;
    }

    .breadcrumb li a {
      color: #fff;
      text-decoration: none;
    }

    .breadcrumb li a:hover {
      text-decoration: underline;
      color: #1cc3b2;
    }


   footer {
      text-align: center;
      padding: 1rem;
      background: #0e2737;
      color: white;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

 <?php include 'header.php'; ?>

 <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Our Facilities</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Facilities</li>
      </ul>
    </div>
  </section>

<section class="facility-container">
  <?php
    $conn = new mysqli("localhost", "root", "", "crystal_crown_hotel");
    if ($conn->connect_error) {
        exit("Database connection failed.");
    }

    $result = $conn->query("SELECT * FROM facilities ORDER BY id DESC");

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="facility-card">';
            echo '<img src="images/' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["title"]) . '">';
            echo '<div class="facility-details">';
            echo '<h3>' . htmlspecialchars($row["title"]) . '</h3>';
            echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
            echo '</div></div>';
        }
    } else {
        echo "<p style='text-align:center;'>No facilities found.</p>";
    }

    $conn->close();
  ?>
</section>
<div class="facility-icons">
    <div class="icon-box">
      <i class="fas fa-wifi fa-3x"></i>
      <span>Free WiFi</span>
    </div>
    <div class="icon-box">
      <i class="fas fa-concierge-bell fa-3x"></i>
      <span>Room Service</span>
    </div>
    <div class="icon-box">
      <i class="fas fa-cocktail fa-3x"></i>
      <span>Bar & Lounge</span>
    </div>
    <div class="icon-box">
      <i class="fas fa-swimming-pool fa-3x"></i>
      <span>Swimming Pool</span>
    </div>
  </div>


 <?php include 'footer.php'; ?>

</body>
</html>
