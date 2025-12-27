<html>
    <head>
        <title>Check login</title>
        <link href="images/title.png" rel="icon">
    </head>
</html>
 <?php

session_start();

$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username) || empty($password)) {
    header("Location: admin_login.php");
    exit();
}

// Check if username and password match in the database
$sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    // Successful login
    $_SESSION["admin_username"] = $username;
    header("Location: index.php");  // redirect to admin panel
    exit();
} else {
    echo "<script>alert('Invalid username or password'); window.location.href='admin_login.php';</script>";
}
?>





