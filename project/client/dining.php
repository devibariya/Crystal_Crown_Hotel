<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crystal Crown Hotel - Dining</title>
<link href="images/title.png" rel="icon">
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9fb;
      color: #0e2737;
      line-height: 1.6;
    }

    /* Header */
    header {
      background: #1e2a38;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }

    /* Hero / Breadcrumb Section */
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

    /* Menu Section */
    .menu-section {
      
      text-align: center;
    }

    .menu-section h2 {
      font-size: 2.8rem;
      margin-bottom: 15px;
      color: #0e2737;
    }

    .menu-section .underline {
      width: 100px;
      height: 5px;
      background:  #1cc3b2;
      margin: 0 auto 50px;
      border-radius: 5px;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Category Cards */
    .category-box {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .category-box:hover {
      transform: translateY(-12px) scale(1.02);
      box-shadow: 0 15px 40px rgba(28, 195, 178, 0.25);
    }

    .category-img img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .category-box:hover img {
      transform: scale(1.1);
    }

    .category-content {
      padding: 20px 25px;
      text-align: left;
    }

    .category-content h3 {
      font-size: 1.6rem;
      margin-bottom: 12px;
      color: #0e2737;
    }

    .category-content p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 20px;
    }

    /* Order Button */
    .order-btn {
      display: inline-block;
      padding: 12px 25px;
      background:  #1cc3b2;
      color: white;
      text-decoration: none;
      border-radius: 30px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .order-btn:hover {
      background:  #0e2737;
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .breadcrumb-content h1 {
        font-size: 2rem;
      }

      .menu-section h2 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <!-- Hero / Breadcrumb -->
  <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Our Dining</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Dining</li>
      </ul>
    </div>
  </section>

  <!-- Menu -->
  <section class="menu-section">
    <h2>Our Dining Experience</h2>
    <div class="underline"></div>

    <div class="categories">

      <div class="category-box">
        <div class="category-img">
          <img src="images/breakfast.jpg" alt="Breakfast Dishes" />
        </div>
        <div class="category-content">
          <h3>Breakfast</h3>
          <p>Kickstart your morning with a royal spread of continental, South Indian, and healthy organic options.</p>
          <a href="breakfast.php" class="order-btn">Order Breakfast</a>
        </div>
      </div>

      <div class="category-box">
        <div class="category-img">
          <img src="images/lunch.jpg" alt="Lunch Dishes" />
        </div>
        <div class="category-content">
          <h3>Lunch</h3>
          <p>Relish an elegant midday meal with Indian thalis, gourmet platters, and chef’s signature creations.</p>
          <a href="lunch.php" class="order-btn">Order Lunch</a>
        </div>
      </div>

      <div class="category-box">
        <div class="category-img">
          <img src="images/dinner.jpg" alt="Dinner Dishes" />
        </div>
        <div class="category-content">
          <h3>Dinner</h3>
          <p>Indulge in a candlelight fine-dining dinner curated with global flavors and premium ingredients.</p>
          <a href="dinner.php" class="order-btn">Order Dinner</a>
        </div>
      </div>

      <div class="category-box">
        <div class="category-img">
          <img src="images/beverages.jpg" alt="Beverages" />
        </div>
        <div class="category-content">
          <h3>Beverages</h3>
          <p>Choose from refreshing juices, cocktails, mocktails, artisanal teas and coffees served all day.</p>
          <a href="beverages.php" class="order-btn">Order Drinks</a>
        </div>
      </div>

      <div class="category-box">
        <div class="category-img">
          <img src="images/desserts.jpg" alt="Desserts" />
        </div>
        <div class="category-content">
          <h3>Desserts</h3>
          <p>End on a sweet note with handcrafted pastries, traditional Indian sweets and exotic desserts.</p>
          <a href="desserts.php" class="order-btn">Order Dessert</a>
        </div>
      </div>

    </div>
  </section>

  <?php include 'footer.php'; ?>

</body>
</html>
