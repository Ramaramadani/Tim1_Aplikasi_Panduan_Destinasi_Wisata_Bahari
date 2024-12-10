<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESTINASI</title>
    <link rel="stylesheet" href="elemen/css/promo.css" />
  </head>
    <header>
      <div class="navbar">
        <img src="elemen/image/Oceara pUTIH.png" alt="Logo" class="logo" />
        <nav>
          <a href="index.php">HOME</a>
          <a href="destinasi.php">DESTINASI</a>
          <a href="promo.php">PROMO</a>
        </nav>
        <a href="login.html" id="user">
          <img src="user-circle-fill.png" />
        </a>
      </div>
      <body>
    <div class="slider">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="elemen/image/pnt1.jpg" alt="Labuan Bajo">
                <div class="slide-content">
                    <h2>Paket Wisata Labuan Bajo</h2>
                    <p>3D2N - Pulau Kelor - Pulau Padar - Komodo</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="elemen/image/pnt2.jpg" alt="Pulau Padar">
                <div class="slide-content">
                    <h2>Nikmati Hiburan Anda bersama Kami!</h2>
                    <p>Pulau Padar - Pantai Pink</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="elemen/image/pnt1.jpg" alt="Paket Snorkeling">
                <div class="slide-content">
                    <h2>Paket Snorkeling</h2>
                    <p>Sudah termasuk: Paket Snorkeling, Destinasi Eksotis, Hotel Eksklusif, Panduan Profesional</p>
                    <button class="pesan-btn">Pesan Sekarang</button>
                </div>
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <script src="elemen/js/script6.js"></script>
</body>
</html>
    </header>
  </body>
</html>
