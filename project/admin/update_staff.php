<?php

// Connect to database
$con = mysqli_connect("localhost", "root", "", "crystal_crown_hotel");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST['staff_id']) || empty($_POST['staff_id'])) {
        die("Error: staff_id is required.");
    }

    $staff_id = intval($_POST['staff_id']);

    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $salary = floatval($_POST['salary']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $join_date = mysqli_real_escape_string($con, $_POST['join_date']);
    $shift = mysqli_real_escape_string($con, $_POST['shift']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $sql = "UPDATE staff SET 
                first_name='$first_name', 
                email='$email', 
                phone='$phone', 
                department='$department', 
                salary=$salary, 
                position='$position', 
                join_date='$join_date', 
                shift='$shift', 
                status='$status' 
            WHERE staff_id=$staff_id";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Staff updated successfully.'); window.location.href='hotel_staf_view.php';</script>";
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("Error: staff ID not provided.");
    }

    $staff_id = intval($_GET['id']);
    $sql = "SELECT * FROM staff WHERE staff_id = $staff_id";
    $result = mysqli_query($con, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
        die("Staff member not found.");
    }

    $staff = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin - Update Staff</title>
   <link href="images/title.png" rel="icon">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: white;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .form-container {
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      width: 100%;
      padding: 40px 50px;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      width: 100%;
      font-weight: 700;
      font-size: 2.4rem;
      margin-bottom: 20px;
      text-align: center;
      color: #1cc3b2;
    }

    form {
      display: flex;
      gap: 40px;
      width: 100%;
      flex-wrap: wrap;
    }

    .form-half {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
h1{
 width: 100%;
      font-weight: 700;
      font-size: 40px;
      margin-bottom: 20px;
      text-align: center;
	    color: #0e2737;
}
    label {
      font-weight: 600;
      color: #444;
      font-size: 1rem;
      margin-bottom: 6px;
      position: relative;
    }

    label.required::after {
      content: '*';
      color: #f44336;
      margin-left: 4px;
      font-weight: 700;
      font-size: 1.2rem;
      position: absolute;
      right: -14px;
      top: 0;
    }

    input, select {
      background: #f7f9fa;
      border: 2px solid transparent;
      border-radius: 10px;
      padding: 12px 18px;
      color: #333;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    input:focus, select:focus {
      border-color: #1cc3b2;
      background: #ffffff;
      box-shadow: 0 0 10px rgba(28, 195, 178, 0.4);
      outline: none;
    }

    select {
      cursor: pointer;
      appearance: none;
      background-image:
        linear-gradient(45deg, transparent 50%, #1cc3b2 50%),
        linear-gradient(135deg, #1cc3b2 50%, transparent 50%);
      background-position:
        calc(100% - 20px) calc(1em + 2px),
        calc(100% - 15px) calc(1em + 2px);
      background-size: 5px 5px;
      background-repeat: no-repeat;
      padding-right: 40px;
    }

    button {
      margin-top: 30px;
      padding: 14px 40px;
      background: #1cc3b2;
      border: none;
      border-radius: 14px;
      color: white;
      font-size: 1.2rem;
      font-weight: 700;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(28, 195, 178, 0.4);
      align-self: center;
      width: 220px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    button:hover {
      background: #17a89e;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(28, 195, 178, 0.5);
    }

    @media (max-width: 800px) {
      .form-half {
        flex: 1 1 100%;
      }
      button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="form-container">
  <h1>Crystal Crown Hotel<br></h1>
    <h2>Update Staff Member</h2>
    <form method="POST" action="update_staff.php">
      <input type="hidden" name="staff_id" value="<?php echo $staff_id; ?>">

      <div class="form-half">
        <label for="first_name" class="required">First Name</label>
        <input type="text" id="first_name" name="first_name" required value="<?php echo htmlspecialchars($staff['first_name']); ?>">

        <label for="email" class="required">Email</label>
        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($staff['email']); ?>">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($staff['phone']); ?>">

        <label for="department" class="required">Department</label>
        <select id="department" name="department" required>
          <?php
          $departments = ['Housekeeping', 'Reception', 'Kitchen', 'Maintenance', 'Security', 'Management'];
          foreach ($departments as $dept) {
              $selected = ($staff['department'] == $dept) ? 'selected' : '';
              echo "<option value=\"$dept\" $selected>$dept</option>";
          }
          ?>
        </select>

        <label for="salary" class="required">Salary</label>
        <input type="number" id="salary" name="salary" step="0.01" required value="<?php echo $staff['salary']; ?>">
      </div>

      <div class="form-half">
        <label for="position">Position</label>
        <input type="text" id="position" name="position" value="<?php echo htmlspecialchars($staff['position']); ?>">

        <label for="join_date" class="required">Join Date</label>
        <input type="date" id="join_date" name="join_date" required value="<?php echo $staff['join_date']; ?>">

        <label for="shift">Shift</label>
        <select id="shift" name="shift">
          <?php
          $shifts = ['Morning', 'Afternoon', 'Night'];
          foreach ($shifts as $s) {
              $selected = ($staff['shift'] == $s) ? 'selected' : '';
              echo "<option value=\"$s\" $selected>$s</option>";
          }
          ?>
        </select>

        <label for="status">Status</label>
        <select id="status" name="status">
          <?php
          $statuses = ['Active', 'Inactive', 'On Leave'];
          foreach ($statuses as $st) {
              $selected = ($staff['status'] == $st) ? 'selected' : '';
              echo "<option value=\"$st\" $selected>$st</option>";
          }
          ?>
        </select>
      </div>

      <button type="submit">Update Staff</button>
    </form>
  </div>

</body>
</html>
