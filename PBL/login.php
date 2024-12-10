<?php
include 'elemen/database/db.php'; // Include database connection
session_start(); // Mulai sesi

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Cek email di database menggunakan prepared statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Periksa apakah email ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $row['id']; // Simpan user ID di sesi
            $_SESSION['email'] = $row['email']; // Simpan email di sesi
            $_SESSION['name'] = $row['name']; // Simpan nama di sesi
            header("Location: index.php"); // Redirect ke halaman utama
            exit;
        } else {
            // Password salah
            $error_message = "Kata sandi salah.";
        }
    } else {
        // Email tidak ditemukan
        $error_message = "Email tidak terdaftar.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="elemen/css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet" />
    <style>
      .error-message {
        color: red;
        font-size: 14px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1><strong>SIGN IN</strong></h1>

      <!-- Tampilkan pesan error jika ada -->
      <?php if (!empty($error_message)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
      <?php endif; ?>

      <!-- Form Login -->
      <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Kata Sandi:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="MASUK">
      </form>

      <div class="or">Belum punya akun?</div>
      <a href="daftar.php" id="user">Daftar Akun</a>
      <div><a id="user">-----</a></div>
      <div><img src="elemen/image/Oceara.png" /></div>
    </div>
  </body>
</html>
