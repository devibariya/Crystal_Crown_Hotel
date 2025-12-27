<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get contact form records
$sql = "SELECT id, name, email, phone, subject, message, created_at FROM contact_messages ORDER BY created_at ASC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Messages</title>
    <link href="images/title.png" rel="icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f9f8;
            padding: 40px;
            color: #333;
        }

        h2 {
            color: #1cc3b2;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        th, td {
            padding: 16px 20px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }

        th {
            background-color: #1cc3b2;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1fdfd;
            transition: background-color 0.3s ease;
        }

        .no-data {
            text-align: center;
            color: #777;
            padding: 20px;
        }

        a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #c0392b;
        }
    </style>
</head>
<body>

<h2>Contact Form Submissions</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date Submitted</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["subject"]) . "</td>";
                echo "<td>" . nl2br(htmlspecialchars($row["message"])) . "</td>";
                echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                echo "<td><a href='delete_message.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this message?');\">Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8' class='no-data'>No messages found</td></tr>";
        }

        mysqli_close($con);
        ?>
    </tbody>
</table>

</body>
</html>
