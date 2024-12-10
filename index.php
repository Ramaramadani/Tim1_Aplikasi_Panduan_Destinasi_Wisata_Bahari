<?php
// Simulasi data pengguna (gunakan sesi atau database untuk implementasi nyata)
session_start();

// Cek apakah pengguna login atau belum
if (isset($_SESSION['user'])) {
    // Data pengguna jika login
    $email = $_SESSION['user']['email']; // Ambil email dari sesi
    $initial = strtoupper(substr($email, 0, 1)); // Huruf depan email
    $color = sprintf('#%06X', crc32($email) & 0xFFFFFF); // Warna unik untuk avatar
} else {
    $email = null; // Belum login
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="elemen/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <style>
      /* Tambahkan styling untuk avatar huruf depan */
      .user-avatar {
        display: inline-block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #ffffff;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar">
        <img src="elemen/image/Oceara pUTIH.png" alt="Logo" class="logo" />
        <nav>
          <a href="index.php">HOME</a>
          <a href="destinasi.php">DESTINASI</a>
          <a href="promo.php">PROMO</a>
        </nav>
        <!-- Kondisi dinamis: jika sudah login -->
        <?php if ($email): ?>
          <div id="user">
            <!-- Avatar huruf depan -->
            <div class="user-avatar" style="background-color: <?php echo htmlspecialchars($color); ?>;">
              <?php echo htmlspecialchars($initial); ?>
            </div>
          </div>
        <?php else: ?>
          <!-- Jika belum login -->
          <a href="login.php" id="user">
            <img src="elemen/image/user-circle-fill.png" alt="user-icon" />
          </a>
        <?php endif; ?>
      </div>
    </header>
    <img src="elemen/image/JUDUL.png" alt="judul" class="judul" />
    <div class="search-bar">
      <input class="search-text" type="text" />
      <button type="submit" class="material-symbols-outlined">search</button>
    </div>
  </body>
</html>
