<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="homepage.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .contact{
      margin-left: 35%;
      margin-top: 10%;
    }
    form {
      margin: 20px;
      max-width: 400px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }body{
  background-image: url(image/hellohi.webp);
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 16%;
  }
  
  h2 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 3px;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }

  </style>
</head>
<body>
<div class="container-2">
        <div class="main-container " >
            <ul>
                <div class="logo">
                    <li>LOGO</li>
                </div>

                <div class="midinfo">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contactus.php">Contactus</a> <link rel="stylesheet" href="contactus.php"></li>

                </div>

                <div class="signin-login">
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                </div>
            </ul>

        </div>
        <div class="contact">
  <h1>Contact Us</h1>
  <form action="contact.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <input type="submit" value="Submit">
  </form>
  </div>
 
  
</body>
</html>
