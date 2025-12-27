<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php'; ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Rooms - Crystal Crown Hotel</title>
  <link href="images/title.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffffff;
      color: #0e2737;
    }

    .hero {
       background: url('images/our_room.jpg') no-repeat center center/cover;
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
      color: #1cc3b2;
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 10px;
      text-align: center;
      color: #0e2737;
    }

    .underline {
      width: 90px;
      height: 4px;
      background-color: #1cc3b2;
      margin: 0 auto 40px;
      border-radius: 2px;
    }

    .room-card {
      background-color: #fefefe;
      border-radius: 6px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .room-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(28, 195, 178, 0.2);
    }

    .room-img {
      width: 100%;
      height: 240px;
      object-fit: cover;
    }

    .room-content {
      padding: 20px;
    }

    .room-content h3 {
      font-size: 1.6rem;
      color: #0e2737;
      margin-bottom: 10px;
    }

    .room-content p {
      font-size: 0.95rem;
      color: #444;
      margin-bottom: 10px;
    }

    .price {
      font-weight: bold;
      color: #28a745;
    }

    .badge-available {
      background-color: #1cc3b2;
      color: white;
      font-size: 0.85rem;
      padding: 5px 10px;
      border-radius: 20px;
    }

    .badge-unavailable {
      background-color: #dc3545;
      color: white;
      font-size: 0.85rem;
      padding: 5px 10px;
      border-radius: 20px;
    }

    .book-btn {
      background-color: #1cc3b2;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    .book-btn:hover {
      background-color: #0e2737;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }

      .hero {
        height: 70vh;
      }

      .section-title {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-content">
      <h1>Luxury Rooms</h1>
    </div>
  </div>

  <!-- Room Section -->
  <section class="py-5">
    <h2 class="section-title">Available Luxury Rooms</h2>
    <div class="underline"></div>

    <div class="container">
      <div class="row g-4">
        <?php
        $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM room_manage WHERE Room_type = 'Luxery'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $isAvailable = strtolower($row['status']) == 'available';
            $badgeClass = $isAvailable ? 'badge-available' : 'badge-unavailable';
            $buttonDisabled = $isAvailable ? '' : 'disabled';
            $buttonText = $isAvailable ? 'Book Now' : 'Not Available';

            echo '
              <div class="col-md-6 col-lg-4">
                <div class="room-card h-100">
                  <img src="images/' . $row['image'] . '" class="room-img" alt="Room Image">
                  <div class="room-content">
                    <h3>' . $row['Room_type'] . '</h3>
                     <h5>' . $row['Room_category'] . '</h5>
                    <p>' . $row['description'] . '</p>
                    <p class="price">₹' . $row['price'] . '</p>
                    <span class="' . $badgeClass . '">' . ucfirst($row['status']) . '</span><br>
                    <button class="book-btn mt-3" ' . $buttonDisabled . '>' . $buttonText . '</button>
                  </div>
                </div>
              </div>';
          }
        } else {
          echo '<p class="text-center">No luxury rooms available at the moment.</p>';
        }

        mysqli_close($con);
        ?>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
