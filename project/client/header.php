<!-- header.html -->
<header>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }
    
    header {
      z-index: 1000;
      width: 100%;
      position: static;
      top: 0;
      left: 0;
      background-color: #1cc3b2;
      transition: all 0.5s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      
    }

    .top-header {
      background-color: #0e2737;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 50px;
      font-size: 14px;
    }

    .top-header a {
      color: white;
      text-decoration: none;
      margin-right: 20px;
      transition: color 0.3s ease;
    }

    .top-header a:hover {
      color: #1cc3b2;
    }

    .top-social a {
      margin-left: 15px;
      color: white;
      transition: color 0.3s ease;
    }
    .top-social a:hover {
      color: #1cc3b2;
    }

    .main-header {
      
      display: flex;
      height: 100px;
      justify-content: space-between;
      scrollbar-width: auto;
      align-items: center;
      padding: 20px 50px;
    }

    
    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      font-weight: 500;
      position: relative;
      transition: color 0.3s ease;
      padding: 8px 0;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    /* Underline effect on hover */
    nav ul li a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -5px;
      width: 0%;
      height: 2px;
      background-color: #0e2737;
      transition: width 0.3s ease;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    nav ul li a:hover {
      color: #0e2737;
    }

    nav ul li a.active {
      color: #0e2737;
    }

    nav ul li a.active::after {
      width: 100%;
      background-color: #0e2737;
    }

    .book-now-btn a {
      background: #fff;
      color: #1cc3b2;
      padding: 10px 25px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-left: 15px;
      display: inline-block;
    }

    .book-now-btn a:hover {
      background-color: #0e2737;
      color: #fff;
    }

    /* Dropdown styles */
    nav ul li.dropdown {
      position: relative;
    }

    nav ul li.dropdown > a.dropbtn {
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    nav ul li .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color:white  ;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      border-radius: 4px;
      z-index: 9999;
      flex-direction: column;
    }

    nav ul li .dropdown-content li a {
      color: black;
      padding: 12px 20px;
      font-weight: 500;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav ul li .dropdown-content li a:hover {
      background-color: #0e2737;
      color: #1cc3b2;
    }

    /* Show dropdown on hover (desktop) */
    nav ul li.dropdown:hover > .dropdown-content {
      display: flex;
    }

    /* Show dropdown on click (mobile) */
    .dropdown-content.show {
      display: flex !important;
      flex-direction: column;
    }
.logo img {
     padding-top: 40px; 
   height: 180px;
  width: auto;
  display: block;
    }

    @media screen and (max-width: 768px) {
      .top-header, .main-header {
        flex-direction: column;
        text-align: center;
      }

      nav ul {
        flex-direction: column;
        gap: 15px;
        margin-top: 10px;
      }

      nav ul li.dropdown:hover > .dropdown-content {
        display: none; /* Disable hover on mobile */
      }

      .book-now-btn a {
        margin-left: 0;
        margin-top: 10px;
      }
    }
  </style>

  <div class="top-header">
    <div class="contact-info">
      <a href="#"><i class="fas fa-phone"></i> (123) 456-7890</a>
      <a href="#"><i class="fas fa-envelope"></i> info@crystalcrown.com</a>
    </div>
    <div class="top-social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>

  <div class="main-header">
    <div class="logo">
     <a href="#"><img src="images/logo1.png" alt="Crystal Crown Hotel"></a>
    </div>
    <nav>
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
       <li><a href="all_room.php">Room</a></li>
        <li><a href="dining.php">Dining</a></li>
        <li><a href="facility.php">Facilities</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </nav>
    <div class="book-now-btn">
      <a href="booking.html.php">Book Now</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropdown = document.querySelector('nav ul li.dropdown > a.dropbtn');

      dropdown.addEventListener('click', function(e) {
        if(window.innerWidth <= 768){
          e.preventDefault();
          this.parentElement.querySelector('.dropdown-content').classList.toggle('show');
        }
      });

      window.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
          const dropdownContent = dropdown.parentElement.querySelector('.dropdown-content');
          if(dropdownContent.classList.contains('show')){
            dropdownContent.classList.remove('show');
          }
        }
      });
    });
  </script>
</header>
