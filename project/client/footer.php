<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crystal Crown Footer</title>
  <link href="images/title.png" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
    }

    .footer-area {
      background-color: #0e2737;
      width:100%;
      padding: 80px 0 0;
    }

    .container {
      width: auto;
      max-width: 1100px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .single-footer-widget {
      color: #afb4bf;
      margin-bottom: 50px;
    }

    .single-footer-widget .footer-logo img {
      margin-bottom: 20px;
    }

    .single-footer-widget h4 {
      color: #1cc3b2;
      margin-bottom: 15px;
    }

    .single-footer-widget span {
      display: block;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .widget-title {
      font-size: 22px;
      color: #fff;
      margin-bottom: 25px;
    }

    .latest-blog-area {
      margin-bottom: 25px;
    }

    .post-title {
      display: block;
      font-size: 16px;
      color: #fff;
      margin-bottom: 5px;
      text-decoration: none;
    }

    .post-title:hover {
      color: #1cc3b2;
    }

    .post-date {
      font-size: 13px;
      color: #afb4bf;
    }

    .footer-nav {
      list-style: none;
      padding: 0;
    }

    .footer-nav li {
      margin-bottom: 10px;
    }

    .footer-nav li a {
      color: #636a76;
      text-decoration: none;
      font-size: 14px;
    }

    .footer-nav li a:hover {
      color: #fff;
    }

    .nl-form {
      position: relative;
      margin-top: 30px;
    }

    .nl-form input {
      width: 100%;
      height: 46px;
      background-color: #3e525f;
      border-radius: 30px;
      border: none;
      padding: 0 20px;
      color: #fff;
      font-size: 14px;
    }

    .nl-form button {
      position: absolute;
      top: 3px;
      right: 3px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: none;
      background-color: #1cc3b2;
      color: #fff;
      cursor: pointer;
      transition: background 0.3s;
    }

    .nl-form button:hover {
      background-color: #2a303b;
    }

    .copywrite-content {
      padding: 15px 0;
      border-top: 1px solid #273d4b;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      color: #afb4bf;
    }

    .copywrite-text a {
      color: #afb4bf;
      text-decoration: none;
    }

    .copywrite-text a:hover {
      color: #fff;
    }

    .social-info a {
      color: #afb4bf;
      margin-left: 20px;
      text-decoration: none;
    }

    .social-info a:hover {
      color: #fff;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
      }
      .copywrite-content {
        flex-direction: column;
        text-align: center;
      }
          <li><a href="#"><i class="fa fa-caret-right"></i> About Us</a></li>
      .social-info {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<!-- Footer Area Start -->
<!-- Footer Area Start -->
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <!-- Contact Info -->
      <div class="single-footer-widget" style="flex: 1 1 250px;">
        
        
        <h4><i class="fa fa-phone"></i> +91 345-678-9999</h4>
        <span><i class="fa fa-envelope"></i> info@crystalcrown.com</span>
        <span><i class="fa fa-map-marker"></i> Near Girnar Darwaja,Taleti Rd,<br>Mullawada,Junagadh,Gujarat</span>
      </div>

      <!-- Navigation Menu Links -->
      <div class="single-footer-widget" style="flex: 1 1 200px;">
        <h5 class="widget-title">Quick Links</h5>
        <ul class="footer-nav">
          <li><a href="index.php"><i class="fa fa-caret-right"></i> Home</a></li>
          <li><a href="all_room.php"><i class="fa fa-caret-right"></i> Room</a></li>
          
          <li><a href="gallery.php"><i class="fa fa-caret-right"></i> Gallery</a></li>
          <li><a href="contactus.php"><i class="fa fa-caret-right"></i> Contact</a></li>
          <li><a href="about_.php"><i class="fa fa-caret-right"></i> About Us</a></li>
          <li><a href="feedback_i.php"><i class="fa fa-caret-right"></i> Feedback</a></li>
         <!-- <li><a href="booking.html"><i class="fa fa-caret-right"></i> Book Now</a></li>
          <li><a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a></li>
          <li><a href="dining.php"><i class="fa fa-caret-right"></i> Dining</a></li>
          <li><a href="facility.php"><i class="fa fa-caret-right"></i> Facilities</a></li>-->
        </ul>
      </div>

      <!-- Blog Preview -->
      <div class="single-footer-widget" style="flex: 1 1 250px;">
        <h5 class="widget-title">From Our Blog</h5>
        <div class="latest-blog-area">
          <a href="#" class="post-title">10 Best Room View Ideas</a>
          <span class="post-date"><i class="fa fa-clock-o"></i> July 30, 2025</span>
        </div>
        <div class="latest-blog-area">
          <a href="#" class="post-title">Dining Experience at Crystal Crown</a>
          <span class="post-date"><i class="fa fa-clock-o"></i> July 20, 2025</span>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="single-footer-widget" style="flex: 1 1 250px;">
        <h5 class="widget-title">Stay Connected</h5>
        <span>Subscribe to get updates and offers.</span>
        <form class="nl-form">
          <input type="email" placeholder="Your email address" required>
          <button type="submit"><i class="fa fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="container">
    <div class="copywrite-content">
      <div class="copywrite-text">
        &copy; <span id="year"></span> Crystal Crown Hotel. All Rights Reserved.
      </div>
      <div class="social-info">
        <a href="#"><i class="fa fa-facebook-f"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Area End -->

<!-- Footer JS -->
<script>
  // Dynamic year
  document.getElementById('year').textContent = new Date().getFullYear();

  // Newsletter form behavior (demo)
  document.querySelector('.nl-form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Thanks for subscribing!');
  });
</script>

<!-- Footer Area End -->

<!-- JS -->
<script>
  // Auto year update
  document.getElementById('year').textContent = new Date().getFullYear();

  // Optional: Newsletter form prevent default (demo only)
  document.querySelector('.nl-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Subscribed!');
  });
</script>

</body>
</html>
