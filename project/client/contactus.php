<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Contact CrystalCrown Hotel">
  <title>Contact Us - CrystalCrown Hotel</title>
  <link href="images/title.png" rel="icon">
  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.png">

  <!-- Remix Icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffffff;
      color: #0e2737;

    }
     header {
      background: #1e2a38;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
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
      position: relative;
      color: white;
    }

    .hero::after {
      content: "";
      position: absolute;
      background: rgba(0, 0, 0, 0.5);
      inset: 0;
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
    }

    .hero-content h1 {
      font-size: 48px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .info-box i {
      font-size: 28px;
      color: #1cc3b2;
      margin-right: 15px;
    }

    .info-box h4 {
      margin: 0;
      font-size: 18px;
      color: #0e2737;
    }

    .info-box p {
      margin: 5px 0 0;
      color: #555;
    }

    .contact-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .contact-form button {
      background-color: #1cc3b2;
      border: none;
      transition: all 0.3s ease-in-out;
    }

    .contact-form button:hover {
      background-color: #0e2737;
      color: #fff;
    }

    .contact-section {
      padding: 60px 0;
    }

    @media (max-width: 767px) {
      .hero-content h1 {
        font-size: 32px;
      }
    }
  </style>
</head>

<body>

<?php include("header.php"); ?>

<!-- Hero -->
<section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Contact Us</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Contact Us</li>
      </ul>
    </div>
  </section>


<!-- Contact Section -->
<section class="contact-section">
  <div class="container">
    <div class="row gy-5">
      <!-- Info Boxes -->
      <div class="col-lg-5">
        <div class="info-box d-flex mb-4">
          <i class="ri-map-pin-line"></i>
          <div>
            <h4>Address</h4>
            <p>888 Luxury Avenue, Central District, New York, NY 10001</p>
          </div>
        </div>

        <div class="info-box d-flex mb-4">
          <i class="ri-phone-line"></i>
          <div>
            <h4>Phone</h4>
            <p>Reception: +1 (212) 555-0123<br>Reservations: +1 (212) 555-0124</p>
          </div>
        </div>

        <div class="info-box d-flex mb-4">
          <i class="ri-mail-line"></i>
          <div>
            <h4>Email</h4>
            <p>info@crystalcrownhotel.com<br>reservations@crystalcrownhotel.com</p>
          </div>
        </div>

        <div class="info-box d-flex mb-4">
          <i class="ri-time-line"></i>
          <div>
            <h4>Business Hours</h4>
            <p>Reception: 24/7<br>Reservations: 8 AM – 10 PM</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="contact-form">
          <form method="post" action="#" onsubmit="return validateForm()">
            <div class="row">
              <div class="col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6 mt-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <div class="col-md-6 mt-3">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-select" id="subject" name="subject">
                  <option>General Inquiry</option>
                  <option>Reservation Question</option>
                  <option>Group Booking</option>
                  <option>Event Planning</option>
                  <option>Feedback</option>
                </select>
              </div>
              <div class="col-12 mt-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
            </div>
            <button type="submit" class="btn mt-4 w-100">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>

<!-- Scripts -->
<script>
  function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !email || !message) {
      alert("Please fill in all required fields.");
      return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    return true;
  }

  // Prevent form resubmission on refresh
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel__6_");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $subject =  $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Message sent successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }

    mysqli_close($con);
}
?>
