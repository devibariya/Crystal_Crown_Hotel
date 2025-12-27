<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php'; ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Single Rooms - Crystal Crown Hotel</title>
  <link href="images/title.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="room_design.css" rel="stylesheet"> <!-- External CSS -->
</head>
<body>

  <!-- Hero Section -->
  <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Single Rooms</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li><a href="all_room.php">Room</a></li>
      </ul>
    </div>
  </section>

  <!-- Room Section -->
  <section class="py-5">
    <h2 class="section-title">Available Single Rooms</h2>
    <div class="underline"></div>

    <div class="container">
      <div class="row g-4">
        <?php
        $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM room_manage WHERE Room_type = 'Single room'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $isAvailable = strtolower($row['status']) == 'available';
            $badgeClass = $isAvailable ? 'badge-available' : 'badge-unavailable';
            $buttonDisabled = $isAvailable ? '' : 'disabled';
            $buttonText = $isAvailable ? 'Book Now' : 'Not Available';
            $acType = ucfirst($row['Room_category']); // AC / Non-AC

            echo '
              <div class="col-md-6 col-lg-4">
                <div class="room-card h-100">
                  <img src="images/' . $row['image'] . '" class="room-img" alt="Room Image">
                  <div class="room-content">
                    <h3>' . $row['Room_type'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <p class="price">₹' . $row['price'] . '</p>
                    <span class="' . $badgeClass . '">' . ucfirst($row['status']) . '</span>
                    <button class="ac-btn">' . $acType .'</button><br>
                
                   <form action="booking.html.php" method="get">
  <input type="submit" 
         class="book-btn mt-3" 
         value="' . $buttonText . '" 
         ' . ($isAvailable ? '' : 'disabled') . '>
</form>
                  </div>
                </div>
              </div>';
          }
        } else {
          echo '<p class="text-center">No Single rooms available at the moment.</p>';
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
