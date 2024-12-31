<?php
// Memulai sesi untuk mengakses data pengguna
session_start();

// Cek apakah pengguna sudah login atau belum
if (isset($_SESSION['user_id'])) {
  // Ambil data dari sesi
  $email = $_SESSION['email'];  // Ambil email dari sesi
  $name = $_SESSION['name'];    // Ambil nama dari sesi
  $initial = strtoupper(substr($name, 0, 1)); // Ambil huruf pertama dari nama
  $color = sprintf('#%06X', crc32($email) & 0xFFFFFF); // Tentukan warna unik untuk avatar
} else {
  $email = null; // Jika belum login
  $name = null;
}

// Menangani pencarian
if (isset($_GET['query'])) {
  $query = strtolower(trim($_GET['query'])); // Mengambil kata pencarian dan menghilangkan spasi
  // Logika untuk mengarahkan ke halaman sesuai dengan pencarian
  if ($query == 'pantai mirota') {
    header("Location: des1.php");
    exit();
  } elseif ($query == 'pantai corner') {
    header("Location: des2.php");
    exit();
  } elseif ($query == 'pantai melur') {
    header("Location: des3.php");
    exit();
  }
}

// Menangani logout
if (isset($_GET['logout'])) {
  session_destroy(); // Menghapus semua sesi
  header("Location: index.php"); // Redirect ke halaman login
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME</title>
  <link rel="stylesheet" href="elemen/css/index.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
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
        <div id="user" style="display: flex; align-items: center; gap: 10px;">
          <!-- Avatar huruf depan dengan warna unik -->
          <div class="user-avatar" style="background-color: <?php echo htmlspecialchars($color); ?>;">
            <?php echo htmlspecialchars($initial); ?>
          </div>
          <!-- Menampilkan nama pengguna -->
          <div class="user-name">
            <?php echo htmlspecialchars($name); ?>
          </div>
          <!-- Tombol logout -->
          <a href="?logout=true" class="logout-button"><img src="elemen/image/lg.png" alt="logout" /></a>
        </div>
      <?php else: ?>
        <!-- Jika belum login, tampilkan ikon login -->
        <a href="login.php" id="user">
          <img src="elemen/image/user-circle-fill.png" alt="user-icon" />
        </a>
      <?php endif; ?>
    </div>
  </header>
  <img src="elemen/image/JUDUL.png" alt="judul" class="judul" />

  <!-- Form Pencarian -->
  <div class="search-bar">
    <form action="" method="GET">
      <input class="search-text" type="text" name="query" placeholder="Cari pantai..." />
      <button type="submit" class="material-symbols-outlined">search</button>
    </form>
  </div>

  <!-- Hasil Pencarian (jika diperlukan) -->
  <div class="search-results">
    <?php
    // Menampilkan hasil pencarian jika tidak ada pengalihan
    if (isset($query) && !in_array($query, ['pantai mirota', 'pantai korner', 'pantai melur'])) {
      echo '<p>Hasil pencarian tidak ditemukan untuk "' . htmlspecialchars($query) . '"</p>';
    }
    ?>
  </div>
</body>

</html>