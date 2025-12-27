<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$bookingId = isset($_GET['booking_id']) ? intval($_GET['booking_id']) : 0;

if ($bookingId <= 0) {
    die("Invalid booking ID.");
}

$sql = "SELECT * FROM booking WHERE booking_id = $bookingId";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Booking not found.");
}

$booking = mysqli_fetch_assoc($result);

$checkin = new DateTime($booking['check_in']);
$checkout = new DateTime($booking['check_out']);
$nights = $checkin->diff($checkout)->days;
if ($nights < 1) $nights = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Booking Bill</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Segoe+UI&display=swap" rel="stylesheet">
<style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #ffffff;
      margin: 0;
      padding: 40px;
      color: #1e2a38;
      position: relative;
    }

    /* Watermark background */
    /* Watermark */
   .container {
      position: relative;
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      border: 2px solid #1cc3b2;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      background: #fff;
      overflow: hidden;
    }

    /* Logo Watermark */
    .container::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 400px;   /* adjust size */
      height: 400px;
      background: url('images/logo1.png') no-repeat center;
      background-size: contain;
      opacity: 0.28;  /* watermark visibility */
      transform: translate(-50%, -50%);
      z-index: 0;
      pointer-events: none;
    }

    .section{
      position: relative;
      z-index: 1; /* keep content above logo */
    }



    .header {
      text-align: center;
      margin-bottom: 25px;
    }

    .header h1 {
      font-family: 'Cinzel', serif;
      font-size: 2rem;
      margin: 0;
      color: #0e2737;
      letter-spacing: 1.5px;
    }

    .header p {
      margin: 5px 0;
      font-size: 0.95rem;
      color: #666;
    }

    hr {
      border: 0;
      height: 1px;
      background: #ccc;
      margin: 20px 0;
    }

    .section-title {
      font-family: 'Cinzel', serif;
      font-size: 1.3rem;
      color: #1cc3b2;
      margin: 20px 0 10px;
      border-bottom: 2px solid #1cc3b2;
      padding-bottom: 5px;
    }

    .info-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px 50px;
      margin-bottom: 20px;
    }

    .info-item {
      flex: 1 1 45%;
      font-size: 1rem;
      color: #333;
    }

    .info-item strong {
      display: block;
      margin-bottom: 5px;
      color: #0e2737;
    }

    .total-box {
      text-align: center;
      margin-top: 30px;
      padding: 20px;
      background: #f7fafa;
      border: 2px dashed #1cc3b2;
      border-radius: 10px;
      font-size: 1.5rem;
      font-weight: bold;
      color: #0e2737;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
      font-size: 0.9rem;
      color: #555;
    }

    button#printBtn {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #1cc3b2;
      border: none;
      color: white;
      padding: 10px 18px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      transition: 0.3s;
    }
    button#printBtn:hover {
      background: #0e2737;
    }
</style>
</head>
<body>
<div class="container">
<button id="printBtn">🖨️ Print</button>
<div class="header">
<h1>Crystal Crown Hotel</h1>
<p>Luxury Redefined • Comfort Guaranteed</p>
<p>Near Girnar Darwaja,Taleti Rd,<br>Mullawada,Junagadh,Gujarat | +91 98765 43210</p>
</div>

<hr>

<div class="section">
<div class="section-title">Guest Information</div>
<div class="info-grid">
<div class="info-item"><strong>Name:</strong><?= htmlspecialchars($booking['fullname']) ?></div>
<div class="info-item"><strong>Email:</strong><?= htmlspecialchars($booking['email']) ?></div>
<div class="info-item"><strong>Phone:</strong><?= htmlspecialchars($booking['phone']) ?></div>
<div class="info-item full"><strong>Address:</strong><?= htmlspecialchars($booking['Address']) ?></div>
</div>
</div>

<div class="section">
<div class="section-title">Booking Details</div>
<div class="info-grid">
<div class="info-item"><strong>Room Type:</strong><?= htmlspecialchars($booking['room_type']) ?></div>
<div class="info-item"><strong>Room Category:</strong><?= htmlspecialchars($booking['Room_category']) ?></div>
<div class="info-item"><strong>Adults:</strong><?= $booking['adult_count'] ?></div>
<div class="info-item"><strong>Children:</strong><?= $booking['children_count'] ?></div>
<div class="info-item"><strong>Check-in:</strong><?= $booking['check_in'] ?></div>
<div class="info-item"><strong>Check-out:</strong><?= $booking['check_out'] ?></div>
<div class="info-item"><strong>Total Nights:</strong><?= $nights ?></div>
<div class="info-item full"><strong>Special Requests:</strong><?= nl2br(htmlspecialchars($booking['request'])) ?></div>
<div class="info-item"><strong>Payment:</strong><?= htmlspecialchars($booking['payment']) ?></div>
</div>
</div>

<div class="total-box">
      Total Amount: ₹<?= number_format($booking['total'], 2) ?>
</div>

<div class="footer">
<p>Thank you for choosing Crystal Crown Hotel ✨</p>
<p>We look forward to serving you again.</p>
</div>
</div>

<script>
    document.getElementById('printBtn').addEventListener('click', function() {
      window.print();
    });
</script>
</body>
</html>
