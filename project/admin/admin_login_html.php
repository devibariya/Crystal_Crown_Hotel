
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <link href="images/title.png" rel="icon">
    
<link rel="stylesheet" href="login_design.css" />
  </head>
  <body>
    <?php include("header.php"); ?>
  <form class="login-form" action="admininsert.php" method="POST">
    <h1> Admin Login</h1>
    <label for="username">Username</label>
    <input type="text"  name="username" required />
    <label for="password">Password</label>
    <input type="password"  name="password" required />
   
    <button type="submit">Insert</button>
  </form>

</body>
<?php include("footer.php"); ?>
</html>


