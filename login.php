<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="css/homepage.css">
  <style>
    body {
      background-image: url(image/hellohi.webp);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 16%;
    }
    
    h2 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .form-group button:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>
  <div class="main-container " >
    <ul>
        <div class="logo">
            <li>LOGO</li>
        </div>

        <div class="midinfo">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.php">Contactus</a></li>

        </div>

        <div class="signin-login">
            <li><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
        </div>
    </ul>

</div>

  <div class="container">
    
    <h2>Login Form</h2>
    <form action="php/qlogin.php" method="POST">
      <div class="form-group">
        <label for="username">email:</label>
        <input type="text" id="username" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button name="submit" type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
