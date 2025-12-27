<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crystal Crown Hotel</title>
 
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&display=swap" rel="stylesheet">

  <style>
    .admin-header {
      background: linear-gradient(to right, #1cc3b2, #00b894);
      border-bottom: 4px solid #0e2737;
      position: relative;
      overflow: hidden;
       z-index: 1000;
      width: 100%;
      height: 100px;
      position: fixed;
      top: 0;
      left: 0;
    
      transition: all 0.5s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
 a {
      color:white;
      text-decoration: none;
    
    }

    .logo {
  height: 200px;   /* Try a bigger value */
  width: auto;     /* Let width scale with height to keep aspect ratio */
  object-fit: contain;
  position: absolute;
  left: 40px;
  top: 65%;
  transform: translateY(-50%);
  z-index: 2;
}


    .hotel-nm {
      font-family: 'Cinzel', serif;
      font-size: 60px;
      
      font-weight: 700;
      color: #ffffff;
      text-align: center;
      letter-spacing: 1.5px;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
      margin-top: 5px;
      
      animation: fadeInDown 1s ease-out;
      position: relative;
      z-index: 1;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 576px) {
      .logo {
        height: 40px;
        width: 40px;
        left: 10px;
      }

      .hotel-name {
        font-size: 24px;
        letter-spacing: 1px;
      }
    }
  </style>
</head>
<body>

  <!-- Hotel Header -->
  <header class="admin-header">
    <div class="container-fluid position-relative py-4">
      <img src="images/logo1.png" alt="Hotel Logo" class="logo">
      <h1 class="hotel-nm mb-0">Crystal Crown Hotel</h1>
    </div>
  </header>

</body>
</html>
