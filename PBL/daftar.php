<?php
include 'elemen/database/db.php'; // Include database connection

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
    <link rel="stylesheet" href="elemen/css/daftar.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"
      rel="stylesheet"
    />
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
    <input type="submit" value="DAFTAR">
  </div>
  <div class="logo"><a><img src="elemen/image/Oceara.png" /></a></div>
</form>
    </div>
 <script src="elemen/js/script4.js"></script>
  </body>
</html>