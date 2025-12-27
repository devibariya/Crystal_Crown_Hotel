<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Rooms - Crystal Crown Hotel</title>
  <link href="images/title.png" rel="icon">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
       height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
     
      display: flex;
  flex-direction: column;
  min-height: 100vh;
    }
 header {
      
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
    .room-card {
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      text-decoration: none;
      color: inherit;
    }

    .room-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 12px 20px rgba(0,0,0,0.15);
    }

    .room-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .room-content {
      padding: 20px;
    }

    .room-content h3 {
      margin: 10px;
      font-size: 20px;
      color: #0e2737;
    }

    .room-card:hover h3 {
      color: #1cc3b2;
    }

    .room-content p {
      font-size: 14px;
      margin-top: 8px;
      color: #555;
    }

    .menu-section {
      
      text-align: center;
    }

    .menu-section h2 {
      font-size: 2.8rem;
      margin-bottom: 10px;
      color: #0e2737;
    }

    .menu-section .underline {
      width: 90px;
      height: 4px;
      background-color: #1cc3b2;
      margin: 0 auto 40px;
      border-radius: 2px;
    }
     .hero {
      background: url('images/c.jpg') no-repeat center center/cover;
      height:75vh;
      
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      margin-bottom: 0.5rem;
      color: white;
    }

    .hero-content p {
      font-size: 1.2rem;
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
 @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }

      .hero {
        height: 80vh;
      }}
  </style>
</head>
<body>

  <!-- Header -->
  <?php include 'header.php'; ?>
   
   <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Our Rooms</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Rooms</li>
      </ul>
    </div>
  </section>

  <section class="menu-section">
    <h2>Our Rooms</h2>
    <div class="underline"></div>

  <div class="container">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4">
        <a href="standard_room.php" class="room-card d-block">
          <img src="images/standard.jpg" alt="Standard Room">
          <div class="room-content">
            <h3>Standard Room</h3>
            <p>Comfortable and affordable, perfect for short stays.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="single_room.php" class="room-card d-block">
          <img src="images/single.jpg" alt="Single Room">
          <div class="room-content">
            <h3>Single Room</h3>
            <p>Ideal for solo travelers with all essential amenities.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="deluxe_room.php" class="room-card d-block">
          <img src="images/deluxe.jpg" alt="Deluxe Room">
          <div class="room-content">
            <h3>Deluxe Room</h3>
            <p>Spacious with upgraded features for a luxurious stay.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="luxury_room.php" class="room-card d-block">
          <img src="images/luxury.jpg" alt="Luxury Room">
          <div class="room-content">
            <h3>Luxury Room</h3>
            <p>Premium comfort, elegance, and top-tier service.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="suite_room.php" class="room-card d-block">
          <img src="images/suit.jpg" alt="Suite">
          <div class="room-content">
            <h3>Suite</h3>
            <p>Elegant space with separate living and bedroom areas.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="family_room.php" class="room-card d-block">
          <img src="images/family.jpg" alt="Family Room">
          <div class="room-content">
            <h3>Family Room</h3>
            <p>Spacious room for the entire family to relax together.</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
