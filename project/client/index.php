<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crystal Crown Hotel - Home</title>
  <link href="images/title.png" rel="icon">
  <div class="hero-slider" >
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f8f8f8;
      color: #333;
    }

    .hero-slider {
        position: relative;
        height: 99vh;
        overflow: hidden;
      }

      .hero-slider .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease-in-out;
      }

      .hero-slider .slide.active {
        opacity: 1;
        z-index: 1;
      }

      .hero-slider .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 2;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .hero-slider .overlay h1 {
        color: white;
		
        font-size: 5rem;
        font-weight: bold;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
      }
     header {
      background: #1e2a38;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }

    .section {
      display: flex;
      padding: 60px 80px;
      align-items: center;
      justify-content: space-between;
    }

    .section:nth-child(even) {
      flex-direction: row-reverse;
      background-color: #fff;
    }

    .section-image {
      flex: 1;
      padding: 20px;
    }

    .section-image img {
      width: 100%;
      height: 100;
      border-radius: 3px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .section-content {
      flex: 1;
      padding: 20px;
    }

    .section-content h2 {
      font-size: 32px;
      margin-bottom: 20px;
      color: black;
    }

    .section-content p {
      font-size: 17px;
      line-height: 1.6;
      color: #555;
    }

    .rooms-section {
      padding: 60px 80px;
      background-color: #fff;
    }

    .rooms-title {
      text-align: center;
      font-size: 36px;
      margin-bottom: 40px;
      color: #003366;
    }

    .rooms-container {
      display: flex;
      gap: 30px;
      justify-content: center;
    }

    .room-card {
      position: relative;
      flex: 1;
      overflow: hidden;
      border-radius: 3px;
      cursor: pointer;
    }

    .room-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .room-card:hover img {
      transform: scale(1.05);
    }

    .room-name {
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      width: 100%;
      text-align: center;
      font-size: 20px;
      padding: 10px 0;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .btn {
  display: inline-block;
  padding: 10px 20px;
  margin-top: 15px;
  background-color: #00bfa5;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
  background-color: #0e2737;
  transform: scale(1.05);
}

    .room-card:hover .room-name {
      opacity: 1;
    }

    @media (max-width: 768px) {
      .section {
        flex-direction: column;
        padding: 40px 20px;
      }
      .rooms-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
   <?php include 'header.php'; ?>
    <div class="slide active" style="background-image: url('images/h.jpg');"></div>
    <div class="slide" style="background-image: url('images/ind_bg.jpg');"></div>
    <div class="slide" style="background-image: url('images/bg_f.jpg');"></div>

    <div class="overlay">
      <h1>Crystal Crown Hotel</h1>
    </div>
  </div>

 

  <!-- Room Preview Section -->
  <div class="rooms-section" style=" padding-top: 130px;
  position: relative;">
    <h1 class="rooms-title">Our Rooms</h1>
    <a href="all_room.php"></a>
    <div class="rooms-container" >
      <div class="room-card" style="border-radius: 3px;">
        
      <img src="images/deluxe.jpg" alt="Deluxe Room" />
        <div class="room-name">Deluxe Room</div>
      </div>
     
      <div class="room-card">
        <img src="images/pre.jpg" alt="Premium Room" />
        <div class="room-name">Premium Room</div>
      </div>
      <div class="room-card" style="border-radius: 3px;">
        <img src="images/Luxury.jpg" alt="Luxury" />
        <div class="room-name">Luxury Suite</div>
      </div>
    </div>
  </div>

  <!-- Dining Section -->
  <div class="section">
    <div class="section-image">
      <img src="images/dining1.jpg" alt="Dining" />
    </div>
    <div class="section-content">
      <h2>Fine Dining</h2>
      <p>Enjoy a world-class dining experience with multi-cuisine dishes served fresh by our top chefs. Ambience, taste, and service like never before.</p>
       <a href="dining.php" class="btn">Explore Dining</a>
    </div>
  </div>

  <!-- Facilities Section -->
  <div class="section">
    <div class="section-image">
      <img src="images/gym.jpg" alt="Facilities" />
    </div>
    <div class="section-content">
      <h2>Top-notch Facilities</h2>
      <p>From spa to gym, Wi-Fi to concierge services – we’ve got everything you need for a relaxing and luxurious stay at Crystal Crown Hotel.</p>
       <a href="facility_view.php" class="btn">Explore Facilities</a>
    </div>
  </div>

  <!-- Gallery Section -->
  <div class="section">
    <div class="section-image">
      <img src="images/deluxe.jpg" alt="Gallery" />
    </div>
    <div class="section-content">
      <h2>Our Gallery</h2>
      <p>Take a visual journey through our elegant interiors, spacious rooms, and beautiful surroundings in our gallery preview.</p>
       <a href="gallery.php" class="btn">View Gallery</a>
    </div>
  </div>

  <!-- About Section -->
  <div class="section">
    <div class="section-image">
      <img src="images/Luxury.jpg" alt="About" />
    </div>
    <div class="section-content">
      <h2>About Us</h2>
      <p>Crystal Crown Hotel is known for luxury, comfort, and exceptional hospitality. We’re here to make your stay unforgettable.</p>
       <a href="about.php" class="btn">Learn More</a>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="section">
    <div class="section-image">
      <img src="images/c.jpg" alt="Contact" />
    </div>
    <div class="section-content">
      <h2>Contact Us</h2>
      <p>Reach out to us for bookings, inquiries, or support. We’re always ready to assist you with the best service.</p>
       <a href="contactus.php" class="btn">Contact Us</a>
    </div>
  </div>
 <?php include 'footer.php'; ?>
  <script>
    let slides = document.querySelectorAll(".hero-slider .slide");
    let index = 0;

    setInterval(() => {
      slides[index].classList.remove("active");
      index = (index + 1) % slides.length;
      slides[index].classList.add("active");
    }, 5000);
  </script>
</body>
</html>
