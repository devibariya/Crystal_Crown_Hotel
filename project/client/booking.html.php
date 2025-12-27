<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Crystal Crown Room Booking</title>
  <link href="images/title.png" rel="icon">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #d2f4f2, #ffffff);
      min-height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .page-wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      width: auto;
    }

    .form-container {
      background: #fff;
      width: 100%;
      max-width: 900px;
      height: auto;
      padding-top: 100px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      animation: slideFade 1s ease;
    }

    .form-header {
      background: #ffffff;
      padding: 24px;
      text-align: center;
    }

    .form-header h2 {
      color: #1cc3b2;
      font-size: 2rem;
      font-weight: 600;
    }

    form {
      display: flex;
      flex-wrap: wrap;
      padding: 40px;
      gap: 40px;
    }

    .form-half {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    label {
      font-weight: 600;
      color: #444;
    }

    input,
    select,
    textarea {
      padding: 14px 16px;
      border-radius: 10px;
      border: 2px solid #e3e3e3;
      font-size: 1rem;
      background: #f9f9f9;
      transition: all 0.3s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
      background: #fff;
      border-color: #1cc3b2;
      box-shadow: 0 0 0 3px rgba(28, 195, 178, 0.2);
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    #totalGuests {
      font-weight: bold;
      color: #1cc3b2;
      text-align: center;
      margin-top: 10px;
    }

    .button-wrapper {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    button {
      padding: 14px 48px;
      background: #1cc3b2;
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 1.2rem;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 6px 20px rgba(28, 195, 178, 0.3);
      transition: 0.3s ease;
    }

    button:hover {
      background: #17a89e;
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(28, 195, 178, 0.4);
    }

    .error {
      text-align: center;
      color: red;
      margin-top: 15px;
      display: none;
    }

    @media (max-width: 768px) {
      form {
        flex-direction: column;
        padding: 30px 20px;
      }
      .form-half {
        flex: 1 1 100%;
      }
    }

    @keyframes slideFade {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="page-wrapper">

    <?php include 'header.php'; ?>

    <main>
      <div class="form-container">
        <div class="form-header">
          <h2>Crystal Crown Room Booking</h2>
        </div>
        <form id="bookingForm" action="booking.php" method="POST" >
          <div class="form-half">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Mobile Number</label>
            <input type="text" id="phone" name="phone" required />

            <label for="roomType">Room Type</label>
            <select id="roomType" name="roomType" required>
              <option value="">-- Select Room Type --</option>
              <option value="single">Single Room</option>
              <option value="double">Double Room</option>
              <option value="suite">Suite</option>
              <option value="deluxe">Deluxe</option>
              <option value="luxury">Luxury</option>
            </select>

            <label for="room_cat">Room Category</label>
            <select name="room_cat" id="room_cat" required>
              <option value="Ac_room">AC Room</option>
              <option value="Non_Ac_room">Non-AC Room</option>
            </select>
            <input type="hidden" id="totalAmount" name="totalAmount" />


            <label for="address">Address</label>
            <textarea name="address" id="address" placeholder="Your address" required></textarea>
          </div>

          <div class="form-half">
            <label for="adultsCount">Adults</label>
            <input type="number" id="adultsCount" name="adults" min="1" value="1" required />

            <label for="childrenCount">Children</label>
            <input type="number" id="childrenCount" name="children" min="0" value="0" />

            <div id="totalGuests" name="total">Total Guests: 1</div>

            <label for="checkin">Check-In Date</label>
            <input type="date" id="checkin" name="checkin" required />

            <label for="checkout">Check-Out Date</label>
            <input type="date" id="checkout" name="checkout" required />

            <label for="requests">Special Requests</label>
            <textarea name="requests" id="requests" placeholder="Any special requests..."></textarea>

            <label>Payment Method</label>
            <label><input type="radio" name="payment" value="hotel" checked /> Pay at Hotel (Cash/Card)</label>
          </div>

          <div class="button-wrapper">
            <button type="submit">Book Now</button>
          </div>

          <p class="error" id="dateError">Check-out date must be after check-in date.</p>
        </form>
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>

  <script>
    const adultsInput = document.getElementById("adultsCount");
    const childrenInput = document.getElementById("childrenCount");
    const totalGuests = document.getElementById("totalGuests");

    function updateGuests() {
      const adults = parseInt(adultsInput.value) || 0;
      const children = parseInt(childrenInput.value) || 0;
      totalGuests.textContent = `Total Guests: ${adults + children}`;
    }

    adultsInput.addEventListener("input", updateGuests);
    childrenInput.addEventListener("input", updateGuests);

    document.getElementById("bookingForm").addEventListener("submit", function (e) {
      const checkin = new Date(document.getElementById("checkin").value);
      const checkout = new Date(document.getElementById("checkout").value);
      const errorText = document.getElementById("dateError");

      if (checkout <= checkin) {
        e.preventDefault();
        errorText.style.display = "block";
      } else {
        errorText.style.display = "none";
        alert("Room booked successfully!");
      }
    });
    
  </script>
  <script>
  const roomTypeSelect = document.getElementById("roomType");
  const roomCatSelect = document.getElementById("room_cat");
  const checkinInput = document.getElementById("checkin");
  const checkoutInput = document.getElementById("checkout");

  // Create a price map
  const priceMap = {
    single: { Ac_room: 2000, Non_Ac_room: 1500 },
    double: { Ac_room: 3000, Non_Ac_room: 2500 },
    suite: { Ac_room: 5000, Non_Ac_room: 4500 },
    deluxe: { Ac_room: 6000, Non_Ac_room: 5500 },
    luxury: { Ac_room: 8000, Non_Ac_room: 7000 }
  };

  // Create output element
  const priceInfo = document.createElement("div");
  priceInfo.id = "priceInfo";
  priceInfo.style.marginTop = "10px";
  priceInfo.style.fontWeight = "bold";
  roomCatSelect.parentElement.appendChild(priceInfo);

  function calculatePrice() {
    const roomType = roomTypeSelect.value;
    const roomCat = roomCatSelect.value;

    if (!roomType || !roomCat) {
      priceInfo.innerHTML = "";
      return;
    }

    const perNight = priceMap[roomType]?.[roomCat] || 0;

    const checkin = new Date(checkinInput.value);
    const checkout = new Date(checkoutInput.value);
    const nights = (checkout - checkin) / (1000 * 60 * 60 * 24);

    if (isNaN(nights) || nights <= 0) {
      priceInfo.innerHTML = `Price per Night: ₹${perNight} <br>Total Price: ₹0`;
    } else {
      const total = perNight * nights;
      priceInfo.innerHTML = `Price per Night: ₹${perNight} <br>Total Nights: ${nights} <br><span style="color:#1cc3b2">Total Price: ₹${total}</span>`;
    }
  }

  // Attach event listeners
  roomTypeSelect.addEventListener("change", calculatePrice);
  roomCatSelect.addEventListener("change", calculatePrice);
  checkinInput.addEventListener("change", calculatePrice);
  checkoutInput.addEventListener("change", calculatePrice);
  document.getElementById("totalAmount").value = total;
</script>

</body>
</html>
