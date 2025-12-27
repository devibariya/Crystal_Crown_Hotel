<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Order Menu Grid</title>
  <link href="images/title.png" rel="icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0f7fa, #f5f5f5);
      min-height: 100vh;
    }

    .main-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }

    h2 {
      font-size: 2.5rem;
      
      margin-bottom: 35px;
      text-align: center;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      max-width: 1200px;
      width: 100%;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .grid-item {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      padding: 25px 20px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .grid-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    }

    .grid-item img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 20px;
      filter: invert(0); /* Black icon */
    }

    .grid-item button {
      background-color: #1cc3b2;
      border: none;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .grid-item button:hover {
      background-color: #17a196;
    }

    @media (max-width: 600px) {
      h2 {
        font-size: 1.8rem;
      }

      .grid-item {
        padding: 20px 15px;
      }

      .grid-item img {
        width: 80px;
        height: 80px;
      }
    }
  </style>
</head>

<body>
 <?php include ("header.php");?>

  <main class="main-content">
    <h2>
  
  <br><br><img src="https://img.icons8.com/ios-filled/30/000000/restaurant.png" alt="Meal Icon" style="vertical-align: middle; margin-right: 10px;">Order Your Meal
</h2>


    <div class="grid-container">
      <div class="grid-item" onclick="location.href='breakfast_master.php'">
        <img src="https://img.icons8.com/ios-filled/100/tea.png" alt="Breakfast" />
        <button>Breakfast Order</button>
      </div>

      <div class="grid-item" onclick="location.href='lunch_master.php'">
        <img src="https://img.icons8.com/ios-filled/100/salad.png" alt="Lunch" />
        <button>Lunch Order</button>
      </div>

      <div class="grid-item" onclick="location.href='dinner_master.php'">
        <img src="https://img.icons8.com/ios-filled/100/dinner.png" alt="Dinner" />
        <button>Dinner Order</button>
      </div>

      <div class="grid-item" onclick="location.href='dessert_master.php'">
        <img src="https://img.icons8.com/ios-filled/100/dessert.png" alt="Dessert" />
        <button>Dessert Order</button>
      </div>

      <div class="grid-item" onclick="location.href='beverages_master.php'">
        <img src="https://img.icons8.com/ios-filled/100/cocktail.png" alt="Beverage" />
        <button>Beverage Order</button>
      </div>
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>
</html>
