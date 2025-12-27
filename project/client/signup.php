<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fnm = mysqli_real_escape_string($con, $_POST["fnm"]);
    $eml = mysqli_real_escape_string($con, $_POST["eml"]);
    $mno = mysqli_real_escape_string($con, $_POST["mno"]);
    $usernm = mysqli_real_escape_string($con, $_POST['username']);
    $pw = $_POST["pw"];
    $con_pw = $_POST["con_pw"];

    if ($pw !== $con_pw) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit();
    }  

    $query = "INSERT INTO signup (fullname, email, mobile_no, username, password,confirm_password) VALUES ('$fnm', '$eml', '$mno', '$usernm', '$pw','$con_pw')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Registration successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>