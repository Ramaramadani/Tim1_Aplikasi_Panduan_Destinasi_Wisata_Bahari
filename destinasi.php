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
    <title>DESTINASI</title>
    <link rel="stylesheet" href="elemen/css/destinasi.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=double_arrow" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet" />
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
          <!-- Avatar huruf depan dengan warna unik -->
          <div class="user-avatar" style="background-color: <?php echo htmlspecialchars($color); ?>;">
            <?php echo htmlspecialchars($initial); ?>
          </div>
          <!-- Menampilkan nama pengguna di bawah avatar -->
          <div class="user-name">
            <?php echo htmlspecialchars($name); ?>
          </div>
        </div>
      <?php else: ?>
        <!-- Jika belum login, tampilkan ikon login -->
        <a href="login.php" id="user">
          <img src="elemen/image/user-circle-fill.png" alt="user-icon" />
        </a>
      <?php endif; ?>
    </div>
  </header>
    <div class="container swiper">
        <div class="text-area">
            <a href="galang.php"><button>GALANG</button></a>
            <a href="nongsa.php"><button>NONGSA</button></a>
            <a href="tanjung_pinggir.php"><button>Tj.PINGGIR</button></a>
            <a href="tiban.php"><button>TIBAN</button></a>
            <a href="sekupang.php"><button>SEKUPANG</button></a>
            <a href="piayu.php"><button>PIAYU</button></a>
            <a href="punggur.php"><button>PUNGGUR</button></a>
        </div>

        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <a href="des1.php"><img src="elemen/image/pnt1.jpg" alt="img-1" class="image-item" /></a>
                    <a href="#"><p class="sub">MIROTA</p></a>
                    <a href="#"><p class="description">Bagi para pecinta fotografi, Pantai Mirota adalah...</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="des2.php"><img src="elemen/image/pnt2.jpg" alt="img-2" class="image-item" /></a>
                    <a href="#"><p class="sub">CORNER</p></a>
                    <a href="#"><p class="description">Jika Anda mencari tempat yang tenang untuk bersantai sambil menikmati...</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="des3.php"><img src="elemen/image/pnt3.jpg" alt="img-3" class="image-item" /></a>
                    <a href="#"><p class="sub">MELUR</p></a>
                    <a href="#"><p class="description">Bagi Anda yang ingin merasakan suasana pantai yang masih alami, Pantai Melur...</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="des4.php"><img src="elemen/image/pnt4.jpg" alt="img-4" class="image-item" /></a>
                    <a href="#"><p class="sub">NONGSA</p></a>
                    <a href="#"><p class="description">Bagi para pencari kemewahan, Pantai Nongsa adalah destinasi yang wajib...</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="des5.php"><img src="elemen/image/pnt5.jpg" alt="img-5" class="image-item" /></a>
                    <a href="#"><p class="sub">TANJUNG PINGGIR</p></a>
                    <a href="#"><p class="description">Bagi Anda yang suka menjelajahi tempat-tempat baru, Pantai Tanjung...</p></a>
                </li>
            </ul>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="elemen/js/destinasi.js"></script>
</body>
</html>
