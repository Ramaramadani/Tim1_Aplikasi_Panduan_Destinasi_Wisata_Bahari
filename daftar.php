<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php"); // Redirect to login page after successful registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>daftar</title>
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

      .form-container {
        padding: 20px;
        margin: 50px auto;
        margin-top: 2%;
        background-color: rgba(255, 255, 255, 0.454);
        width: 30%;
        height: 500px;
        text-align: left;
        color: rgba(2, 75, 118, 0.9);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
      }

      .form-container h2 {
        text-align: center;
        color: rgba(2, 75, 118, 0.9);
      }

      .form-group {
        margin-bottom: 15px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }

      .form-group input {
        margin: 5px;
        width: 97%;
        background-color: rgba(240, 248, 255, 0.68);
        height: 45%;
        border: 0;
        border-radius: 5px;
        padding: 15px;
        outline: none;
        color: black;
      }

      .form-group input:focus {
        border-color: #007bff;
        outline: none;
      }

      .error-message {
        color: red;
        font-size: 14px;
        display: none;
      }

      .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: rgba(2, 75, 118, 0.9);
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }

      .submit-btn:hover {
        background-color: #0056b3;
      }

      .logo img {
        height: 60px;
        margin-left: 110px;
      }

      .or {
        margin: 10px;
        color: rgba(2, 75, 118, 0.9);
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h2>Pendaftaran</h2>
      <form action="" method="POST">
        <div class="form-group">
    <label for="name">Nama:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Kata Sandi:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Daftar">
  </div>
</form>
    </div>

    <script>
      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          let name = document.getElementById("name").value;
          let email = document.getElementById("email").value;
          let password = document.getElementById("password").value;
          let valid = true;

          if (name === "") {
            document.getElementById("nameError").style.display = "block";
            valid = false;
          } else {
            document.getElementById("nameError").style.display = "none";
          }

          let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
          if (!emailPattern.test(email)) {
            document.getElementById("emailError").style.display = "block";
            valid = false;
          } else {
            document.getElementById("emailError").style.display = "none";
          }

          if (password.length < 6) {
            document.getElementById("passwordError").style.display = "block";
            valid = false;
          } else {
            document.getElementById("passwordError").style.display = "none";
          }

          if (valid) {
            alert("Pendaftaran berhasil!");
            document.getElementById("registrationForm").reset();
          }
        });
    </script>
  </body>
</html>