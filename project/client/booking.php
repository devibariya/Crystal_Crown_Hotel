<html>
  <head>
    <title>Booking</title>
    <link href="images/title.png" rel="icon">
  </head>
</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:login.html");
  exit();
}

$fnm = $_POST["fullname"];
$addr = $_POST['address'];
$eml = $_POST["email"];
$mno = $_POST["phone"];
$rt = $_POST["roomType"];
$room_cat = $_POST["room_cat"];
$ad_c = $_POST["adults"];
$ch_c = $_POST["children"];
$chein = $_POST["checkin"];
$chout = $_POST["checkout"];
$req = $_POST["requests"];
$pay = $_POST["payment"];



$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

// Price calculation logic
$priceMap = [
    "single" => ["Ac_room" => 2000, "Non_Ac_room" => 1500],
    "double" => ["Ac_room" => 3000, "Non_Ac_room" => 2500],
    "suite" => ["Ac_room" => 5000, "Non_Ac_room" => 4500],
    "deluxe" => ["Ac_room" => 6000, "Non_Ac_room" => 5500],
    "luxury" => ["Ac_room" => 8000, "Non_Ac_room" => 7000]
];

$perNight = $priceMap[$rt][$room_cat] ?? 0;

// Calculate number of nights
$checkinDate = new DateTime($chein);
$checkoutDate = new DateTime($chout);
$nights = $checkinDate->diff($checkoutDate)->days;

if ($nights < 1) $nights = 1;

$tot = $perNight * $nights;

$que = "INSERT INTO booking (`fullname`,`Address`, `email`, `phone`, `room_type`,`Room_category`, `adult_count`, `children_count`, `total`, `check_in`, `check_out`, `request`, `payment`)
VALUES ('$fnm','$addr', '$eml',$mno, '$rt','$room_cat', $ad_c, $ch_c,'$tot', '$chein', '$chout', '$req', '$pay');";

mysqli_query($con, $que);
$bookingId = mysqli_insert_id($con);
echo "<script>alert('Booking successful! Total Price: ₹$tot');window.location='booking_bill.php?booking_id=$bookingId';</script>";
?>
