<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            session_start();
            $_SESSION['user_id'] = $row['id']; // Store user ID in session
            header("Location: index.php"); // Redirect to dashboard or another page
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Didact Gothic", sans-serif;
        font-weight: 400;
        font-style: normal;
      }
      
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: url("pnti.jpg") no-repeat center;
        background-size: cover;
        overflow: hidden;
      }

      .container {
        padding: 10px;
        margin: 60px auto;
        margin-top: 7%;
        background-color: rgba(255, 255, 255, 0.454);
        width: 27%;
        height: 450px;
        text-align: center;
        color: rgba(2, 75, 118, 0.9);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
      }

      img {
        height: 60px;
      }

      .container input {
        margin: 10px;
        width: 90%;
        background-color: rgba(240, 248, 255, 0.68);
        height: 12%;
        border: 0;
        border-radius: 5px;
        padding: 5px;
        outline: none;
        color: black;
      }

      span {
        margin: 15px;
        display: block;
        cursor: pointer;
      }

      .or {
        margin: 15px;
        color: rgba(2, 75, 118, 0.9);
      }

      input[type="submit"] {
        width: 90%;
        height: 9%;
        padding: 10px;
        background-color: rgba(2, 75, 118, 0.9);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #0056b3;
      }

      span {
        color: rgba(2, 75, 118, 0.9);
      }

      #user {
        color: rgba(2, 75, 118, 0.9);
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <strong><h1>SIGN IN</h1></strong>
<form action="" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Kata Sandi:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="MASUK">
          <div class="or">---------</div>
      <a><img src="Oceara.png" /></a>
</form>
    </div>
  </body>
</html>