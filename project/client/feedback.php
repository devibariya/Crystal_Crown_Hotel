<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback - Crystal Crown Hotel</title>
 <link href="images/title.png" rel="icon">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
    }

    body {
    
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
 header {
      
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
   
     .hero {
      background: url('images/c.jpg') no-repeat center center/cover;
      height: 75vh;
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

    .overlay {
      background-color: rgba(255, 255, 255, 0.92);
      min-height: 100vh;
      padding: 80px 20px 40px;
    }

    .form-wrapper {
      max-width: 500px;
      margin: auto;
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .form-wrapper h2 {
      text-align: center;
      color: #0e2737;
      margin-bottom: 10px;
    }

    .form-wrapper p {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
    
      margin-bottom: 15px;
    }
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #1cc3b2;
      border-radius: 6px;
      background-color: #fff;
      color: black;
      font-size: 15px;
    }

    .form-group label {
        
      display: block;
      color: #0e2737;
      margin-bottom: 6px;
      font-weight: 600;
    }
    .form-group input
    { border: 3px solid #1cc3b2;
      border-radius: 3px;}
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      outline: none;
    }

    .form-group textarea {
      resize: vertical;
      height: 100px;
    }

    .submit-btn {
      background-color: #1cc3b2;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
      width: 100%;
    }

    .submit-btn:hover {
      background-color: #17a89c;
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
      background: #0e2737;
      text-align: center;
      padding: 1rem;
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

     <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Our Feedback</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Feedback</li>
      </ul>
    </div>
  </section>


  <div class="overlay">
    <div class="form-wrapper">
      <h2>We Value Your Feedback</h2>
      <p>Help us improve your experience at Crystal Crown Hotel</p>

      <form action="feedback.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name *</label>
          <input type="text" name="name" id="name" required />
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" name="email" id="email" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" id="phone" />
        </div>

        <div class="form-group">
        <label for="room">Room Number:</label>
        <input type="text" name="room" id="room">
      </div>

      <div class="form-group">
        <label for="rating">How was your stay?</label>
        <select name="rating" id="rating" required>
          <option value="">--Select--</option>
          <option value="Excellent">Excellent ⭐⭐⭐⭐⭐</option>
          <option value="Good">Good ⭐⭐⭐⭐</option>
          <option value="Average">Average ⭐⭐⭐</option>
          <option value="Poor">Poor ⭐⭐</option>
        </select>
      </div>

        <div class="form-group">
          <label for="message">Your Feedback *</label>
          <textarea name="message" id="message" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Feedback</button>
      </form>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
