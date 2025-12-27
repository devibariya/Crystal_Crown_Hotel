<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer Scroll</title>
  <style>
   body {
  margin: 0;
  padding: 30px 20px 80px 0; /* Add bottom padding equal to or more than the footer height */
  background: #f4f4f4;
  font-family: 'Segoe UI', sans-serif;
}


    .scroll-footer {
      width: 100%;
      background-color: #0e2737;
      color: #ffffff;
      padding: 15px 0;
      position: fixed;
      bottom: 0;
      left: 0;
      text-align: center;
      box-shadow: 0 -3px 12px rgba(0, 0, 0, 0.3);
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #0e2737;
      color: #ffffff;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Content above -->

  <!-- Scrolling Footer -->
  <div class="scroll-footer">
    &copy; Crystal Crown Hotel, All Rights Reserved.
  </div>

</body>
</html>
