<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crystal Crown Hotel - Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    
    body {
      height: 100vh;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    header {
  background: #1e2a38;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
}
    .page-wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      width: auto;
    }
    .signup-form {
      background: #ffffff;
      padding: 50px 35px;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      animation: slideUp 0.6s ease-out;
    }

    .signup-form h1 {
      text-align: center;
      color: #1cc3b2;
      margin-bottom: 25px;
      font-size: 24px;
    }

    .signup-form input {
      width: 100%;
      padding: 14px 16px;
      margin: 12px 0;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    .signup-form input:focus {
      border-color: #1cc3b2;
      outline: none;
      box-shadow: 0 0 5px rgba(28, 195, 178, 0.5);
    }

    .signup-form input::placeholder {
      color: #aaa;
      font-size: 14px;
    }

    .signup-form button {
      width: 100%;
      padding: 14px;
      margin-top: 10px;
      background-color: #1cc3b2;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .signup-form button:hover {
      background-color: #0f7f72;
    }

   
    @keyframes slideUp {
      from {
        transform: translateY(30px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @media (max-width: 480px) {
      .signup-form {
        padding: 35px 25px;
      }
    }
  </style>
</head>
<body>
    <div class="page-wrapper">
<?php include("header.php"); ?>
<main>
  <form class="signup-form" method="POST" action="signup.php">
    <h1>Create Your Account</h1>

    <input type="text" name="fnm" placeholder="Full Name" required />
    <input type="email" name="eml" placeholder="Email" required />
    <input type="tel" name="mno" placeholder="Phone Number" required />
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="pw" placeholder="Create Password" required />
    <input type="password" name="con_pw" placeholder="Confirm Password" required />

    <button type="submit">Sign Up</button>

    <div class="form-footer">
      Already have an account? <a href="login.html">Login</a>
    </div>
  </form>
</main>
<?php include("footer.php"); ?>
</div>
</body>
</html>
