<?php
 include("header.php");
// Database Connection

$conn = new mysqli("localhost", "root", "", "crystal_crown_hotel");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// Handle Form Submission
if (isset($_POST['addFacility'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $uploadDir = 'images/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $targetPath = $uploadDir . basename($imageName);

    if (move_uploaded_file($tmpName, $targetPath)) {
        $sql = "INSERT INTO facilities (title, description, image) 
                VALUES ('$title', '$description', '$targetPath')";
        if ($conn->query($sql)) {
            $message = "Facility added successfully!";
        } else {
            $message = "Database insert failed.";
        }
    } else {
        $message = "Image upload failed.";
    }
}
 include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Facility</title>
    <link href="images/title.png" rel="icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            padding: 200px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 8px;
        }
        h2 {
            color: #1cc3b2;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #aaa;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background: #1cc3b2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .message {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Add New Facility</h2>
    <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Facility Title" required>
        <textarea name="description" placeholder="Facility Description" rows="4" required></textarea>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit" name="addFacility">Add Facility</button>
    </form>
</div>
</body>
</html>
