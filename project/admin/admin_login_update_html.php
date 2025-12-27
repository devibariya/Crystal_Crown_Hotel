<?php
// Get ID before HTML (from URL or default to 1 for example)
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login Update</title>
 <link href="images/title.png" rel="icon">
</head>
<body>

  <form class="login-form" action="" method="POST">
    <h1>Admin Login</h1>

    <label for="id">Id</label>
    <input type="text" name="id" id="id" value="<?php echo $id; ?>" required readonly />

    <label for="username">Username</label>
    <input type="text" name="username" id="username" required placeholder="Enter your username" />

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required placeholder="Enter your password" />

    <button type="submit">Update</button>
  </form>

</body>
</html>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $usernm = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $que = "UPDATE admin_login SET username='$usernm', password='$password' WHERE id='$id'";

    if (mysqli_query($con, $que)) {
        echo "<script>alert('Login updated successfully.'); window.location.href='login_master.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
