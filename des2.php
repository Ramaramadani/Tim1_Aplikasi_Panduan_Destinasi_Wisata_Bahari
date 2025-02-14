<?php
session_start(); // Muat sesi

// Cek apakah pengguna sudah login
$name = isset($_SESSION['name']) ? $_SESSION['name'] : null; // Ambil nama pengguna
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null; // Ambil email
$initial = $name ? strtoupper(substr($name, 0, 1)) : ''; // Ambil huruf pertama dari nama
$color = $email ? sprintf('#%06X', crc32($email) & 0xFFFFFF) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>HOME</title>
  <link rel="stylesheet" href="elemen/css/des2.css" />
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios" />
</head>
<body>
<header>
  <div class="navbar">
    <div class="back">
      <a href="destinasi.php">
        <button class="material-symbols-outlined">arrow_back_ios</button>
        <button class="back-button">BACK</button>
      </a>
    </div>
</div> 
    <!-- Menampilkan user avatar di pojok kanan atas -->
    <?php if ($email): ?>
      <div id="user">
        <!-- Avatar pengguna dengan inisial nama -->
        <div class="user-avatar" style="background-color: <?php echo htmlspecialchars($color); ?>;">
          <?php echo htmlspecialchars($initial); ?>
        </div>
        <!-- Nama pengguna ditampilkan di bawah avatar -->
        <div class="user-name">
          <?php echo htmlspecialchars($name); ?>
        </div>
      </div>
    <?php else: ?>
      <a href="login.php" id="user">
        <img src="elemen/image/user-circle-fill.png" alt="user-icon" />
      </a>
    <?php endif; ?>
  </div>
</header>


  <div class="tentang">
    <h1>CORNER</h1>
    <p class="description">Jika Anda mencari tempat yang tenang untuk bersantai sambil menikmati pemandangan laut, Pantai Corner adalah pilihan tepat. Kafe-kafe yang berjejer di tepi pantai menyajikan berbagai menu lezat yang bisa Anda nikmati sambil memandang lautan lepas.</p>
  </div>

  <footer>
    <div class="container">
      <!-- Gambar yang dapat diklik untuk menampilkan Google Maps -->
      <img src="elemen/image/4.png" alt="Gambar 1" onclick="showMap()">
      <img src="elemen/image/3.png" alt="Gambar 2" onclick="redirectToForm()">
      <img src="elemen/image/2.png" alt="Gambar 3">
      <img src="elemen/image/1.png" alt="Gambar 4" onclick="ulasan()">
    </div>

    <!-- Tempat iframe akan muncul -->
<div id="map-container" style="display:none;">
  <button id="close-map" onclick="hideMap()">Tutup Map</button>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.949842017512!2d104.08540907357461!3d1.195496862055451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da271da788d7f9%3A0x9db9a50c7cb3e5cf!2sPantai%20corner!5e0!3m2!1sen!2sid!4v1734962797233!5m2!1sen!2sid" 
    width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


    <div class="card-wrapper">
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <img src="elemen/image/mrt1.jpg" alt="img-1" class="image-item" />
        </li>
        <li class="card-item swiper-slide">
          <img src="elemen/image/mrt2.jpg" alt="img-2" class="image-item" />
        </li>
        <li class="card-item swiper-slide">
          <img src="elemen/image/mrt3.jpg" alt="img-3" class="image-item" />
        </li>
        <li class="card-item swiper-slide">
          <img src="elemen/image/mrt4.jpg" alt="img-4" class="image-item" />
        </li>
        <li class="card-item swiper-slide">
          <img src="elemen/image/mrt5.JPG" alt="img-5" class="image-item" />
        </li>
      </ul>
      <div class="swiper-button-next"></div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="elemen/js/destinasi.js"></script>

  <script>
  // Fungsi untuk menampilkan iframe ketika gambar pertama diklik
  function showMap() {
      var mapContainer = document.getElementById('map-container');
      var container = document.querySelector('.container');
      var cardWrapper = document.querySelector('.card-wrapper');

      mapContainer.style.display = 'flex';  // Tampilkan iframe
      container.style.display = 'none';     // Sembunyikan ikon
      cardWrapper.style.display = 'none';   // Sembunyikan gambar di sebelah kanan
  }

  // Fungsi untuk mengarahkan ke form pembelian tiket
  function redirectToForm() {
      console.log("Redirecting to form...");
      window.location.href = "beltik.php"; // Pastikan nama file PHP benar
  }

    // Fungsi untuk mengarahkan ke form pembelian tiket
  function ulasan() {
      console.log("Redirecting to form...");
      window.location.href = "ulasan.php"; // Pastikan nama file PHP benar
  }

  function hideMap() {
      var mapContainer = document.getElementById('map-container');
      var container = document.querySelector('.container');
      var cardWrapper = document.querySelector('.card-wrapper');

      mapContainer.style.display = 'none';  // Sembunyikan iframe
      container.style.display = 'flex';     // Tampilkan ikon kembali
      cardWrapper.style.display = 'block';  // Tampilkan gambar di sebelah kanan kembali
  }
  </script>
</body>

</html>
