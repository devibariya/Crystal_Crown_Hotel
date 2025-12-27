
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Crystal Crown Hotel</title>

        <!-- Favicon -->
       <link href="images/title.png" rel="icon">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

<style>
/* Reset and Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 header {
      
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #333;
  background-color: #fff;
  line-height: 1.7;
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


.hero {
  background: url('images/c.jpg') no-repeat center center/cover;
  height: 80vh;
  display: flex;                 
  justify-content: center;       
  align-items: center;           
  text-align: center;
  color: white;
  position: relative;
  padding: 0;
}

.hero h1 {
  font-size: 42px;
  margin-bottom: 15px;
  font-weight: bold;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  z-index: 1;
  position: relative;
}
.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
   color: white;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 0;
}

 
    
/* Grid Utilities */
.grid-2 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 40px;
  align-items: center;
  margin-top: 60px;
  margin-left:100px;
}

.grid-4 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 40px;
  margin-top: 40px;
}

/* Typography */
.heading {
  font-size: 28px;
  color: #1cc3b2;
  margin-bottom: 20px;
}

.text-center {
  text-align: center;
}

/* Highlight Numbers */
.highlight {
  font-size: 36px;
  font-weight: bold;
  color: #1cc3b2;
}

/* Image Box */
.img-box img {
  width: 100%;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}



/* Cards */
.card {
  background: #f8f8f8;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
}

/* Icon Box */
.icon-box, .icon-circle {
  font-size: 32px;
  color: #1cc3b2;
  margin-bottom: 15px;
}

/* Icon Circle (Awards Section) */
.icon-circle {
  background-color: #e0f8f5;
  border-radius: 50%;
  padding: 18px;
  display: inline-block;
}



/* Responsive Adjustments */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 36px;
  }

  .highlight {
    font-size: 28px;
  }
}


</style>


<body>
  <?php
include("header.php");
?>

<section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>About Us</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>About Us</li>
      </ul>
    </div>
  </section>


  <section id="about">
    <div class="grid-2">
      <div>
        <h3 class="heading">Our Story of Excellence</h3>
        <p>Since 1985, Grandeur Palace Hotel has been synonymous with luxury, elegance, and unparalleled service. What began as a vision to create the world's most exceptional hospitality experience has evolved into a legacy of excellence that continues to set new standards in luxury accommodation.</p>
        <p>Our commitment to perfection is reflected in every detail, from our meticulously designed interiors to our world-class amenities and personalized service that anticipates your every need.</p>
        <div class="grid-2">
          <div class="text-center">
            <div class="highlight">40+</div>
            <div>Years of Excellence</div>
          </div>
          <div class="text-center">
            <div class="highlight">500+</div>
            <div>Luxury Rooms</div>
          </div>
        </div>
      </div>
      <div class="img-box">
        <img src="https://readdy.ai/api/search-image?query=luxury%20hotel%20grand%20lobby%20interior%20with%20marble%20floors%2C%20crystal%20chandeliers%2C%20elegant%20furniture%2C%20sophisticated%20architecture%2C%20premium%20hospitality%20atmosphere%2C%20welcoming%20ambiance&width=600&height=500&seq=about001&orientation=portrait" alt="Hotel Lobby" />
      </div>
    </div>

    <!-- Mission & Vision -->
    <div class="grid-2" style="margin-top:60px;">
      <div class="card">
        <div class="icon-box"><i class="ri-eye-line" style="color:#1cc3b2;"></i></div>
        <h4>Our Vision</h4>
        <p>To be the world's most distinguished luxury hotel brand, creating extraordinary experiences that exceed expectations and inspire lifelong memories for our guests.</p>
      </div>
      <div class="card">
        <div class="icon-box"><i class="ri-heart-line" style="color:#1cc3b2;"></i></div>
        <h4>Our Mission</h4>
        <p>To deliver unparalleled luxury hospitality through exceptional service, elegant accommodations, and personalized experiences that create lasting connections with our guests.</p>
      </div>
    </div>

    <!-- Awards -->
    <div class="text-center" style="margin-top: 80px;">
      <h4 style="font-size:2rem;">Awards & Recognition</h4>
      <div class="grid-4">
        <div class="text-center">
          <div class="icon-circle"><i class="ri-award-line"></i></div>
          <h5>World's Best Hotel</h5>
          <p>Travel + Leisure 2024</p>
        </div>
        <div class="text-center">
          <div class="icon-circle"><i class="ri-star-line"></i></div>
          <h5>5-Star Rating</h5>
          <p>Forbes Travel Guide</p>
        </div>
        <div class="text-center">
          <div class="icon-circle"><i class="ri-medal-line"></i></div>
          <h5>Excellence Award</h5>
          <p>Condé Nast Traveler</p>
        </div>
        <div class="text-center">
          <div class="icon-circle"><i class="ri-trophy-line"></i></div>
          <h5>Luxury Hotel of the Year</h5>
          <p>World Travel Awards</p>
        </div>
      </div>
    </div>

   
  </section>

  <!-- Optional JavaScript for future interactivity -->
  <script>
    // You can use this script area for adding animations, sliders, or interactivity later
    console.log("Grandeur Palace About Page Loaded");
  </script>
</body>
</html>


<?php
include("footer.php");
?>