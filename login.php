<?php
include 'elemen/database/db.php'; // Termasuk koneksi database
session_start(); // Mulai sesi

// Pseudocode: Periksa apakah formulir telah disubmit (metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pseudocode: Ambil input email dan kata sandi dari formulir
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    try {
        // Pseudocode: Siapkan query untuk mencari email di database menggunakan prepared statement
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        if (!$stmt) {
            throw new Exception("Error preparing query: " . $conn->error); // Menangani kesalahan pada prepared statement
        }
        
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Pseudocode: Periksa apakah email ditemukan di database
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Pseudocode: Verifikasi kata sandi dengan yang ada di database
            if (password_verify($password, $row['password'])) {
                // Pseudocode: Jika login berhasil, simpan informasi pengguna di sesi
                $_SESSION['user_id'] = $row['id']; // Simpan user ID di sesi
                $_SESSION['email'] = $row['email']; // Simpan email di sesi
                $_SESSION['name'] = $row['name']; // Simpan nama di sesi
                header("Location: index.php"); // Pseudocode: Alihkan ke halaman utama
                exit; // Pastikan skrip berhenti setelah pengalihan
            } else {
                // Pseudocode: Jika kata sandi salah, tampilkan pesan error
                throw new Exception("Kata sandi salah.");
            }
        } else {
            // Pseudocode: Jika email tidak ditemukan, tampilkan pesan error
            throw new Exception("Email tidak terdaftar.");
        }

        // Pseudocode: Tutup prepared statement setelah selesai
        $stmt->close();
    } catch (Exception $e) {
        // Tangkap exception dan tampilkan pesan error
        $error_message = $e->getMessage();
    }
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
