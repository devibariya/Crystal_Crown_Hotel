<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery</title>
  <link href="images/title.png" rel="icon">
<?php include 'header.php'; ?>
<style>
  .gallery-hero {
   background: url('images/c.jpg') no-repeat center center/cover;
    background-size: cover;
    background-position: center;
    height: 300px;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
  }

  .gallery-hero::after {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
   
  }
 header {
      
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }
  .gallery-hero h1,
  .gallery-hero p {
    position: relative;
    z-index: 2;
    margin: 0;
  }

  .gallery-hero h1 {
    font-size: 48px;
    font-weight: bold;
  }

  .gallery-hero p {
    margin-top: 10px;
    font-size: 20px;
  }

  .gallery-container {
    padding: 40px 60px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
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
  .gallery-container img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
  }

  .gallery-container img:hover {
    transform: scale(1.05);
  }

  @media(max-width: 768px) {
    .gallery-hero h1 {
      font-size: 36px;
    }

    .gallery-hero p {
      font-size: 16px;
    }
  }
</style>


 <section class="breadcrumb-area">
    <div class="breadcrumb-content">
      <h1>Our Gallery</h1>
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a> › </li>
        <li>Gallery</li>
      </ul>
    </div>
  </section>
  <section class="menu-section">
    <h2>Our Gallery</h2>
    <div class="underline"></div>


<div class="gallery-container">
  <img src="images/hotel.jpg" alt="Gallery Image 1">
  <img src="images/pool.jpg" alt="Gallery Image 2">
  <img src="images/lunch.jpg" alt="Gallery Image 3">
  <img src="images/lux1.jpg" alt="Gallery Image 4">
  <img src="images/kid.jpg" alt="Gallery Image 5">
  <img src="images/garden.jpg" alt="Gallery Image 6">
  <img src="images/parking.jpg" alt="Gallery Image 7">
  <img src="images/std2.jpg" alt="Gallery Image 8">
  <img src="images/single.jpg" alt="Gallery Image 5">
  <img src="images/c.jpg" alt="Gallery Image 6">
  <img src="images/gallery.jpg" alt="Gallery Image 7">
  <img src="images/spa.jpg" alt="Gallery Image 8">
  <img src="images/shuttle.jpg" alt="Gallery Image 5">
  <img src="images/cont.jpg" alt="Gallery Image 6">
  <img src="images/conference.jpg" alt="Gallery Image 7">
  
</div>

<?php include 'footer.php'; ?>

</body>
</html>
