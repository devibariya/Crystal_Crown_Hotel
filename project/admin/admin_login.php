<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <link href="images/title.png" rel="icon">
  <link rel="stylesheet" href="login_design.css" />
  <script type="text/javascript">
    function validateForm() {
      var form = document.forms["admin_login"];
      var username = form["username"].value;
      var password = form["password"].value;

      if(password.length < 5) {
        alert("Password should be at least 5 characters.");
        return false;
      }
      if(!password.match(/^[a-z0-9][\w-]*$/i)) {
        alert("Password can not contain any special character or spaces except '_' or '-' .");
        return false;
      }
      return true; // allow submit
    }
  </script>  
</head>
<body>

  
  <?php include("header.php"); ?>
  <form name="admin_login" class="login-form" action="check_login.php" method="POST" onsubmit="return validateForm()">
    <h1>Admin Login</h1>
    <label for="username">Username</label>
    <input type="text" name="username" required />
    <label for="password">Password</label>
    <input type="password" name="password" required />
    <button type="submit">Login</button>
  </form>

  <?php include("footer.php"); ?>

</body>
</html>
