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
    <link rel="stylesheet" href="elemen/css/promo.css" />
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

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="elemen/image/P1.png" alt="Promo 1">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="elemen/image/P2.png" alt="Promo 2">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="elemen/image/P3.png" alt="Promo 3">
            </div>
        </div>
        
        <!-- Add navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,  // Make the swiper loop infinitely
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
<footer>
    <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="elemen/image/Oceara.png" alt="Logo" />
        </div>

        <!-- Footer Content (Left and Right aligned sections) -->
        <div class="footer-content">
            <div class="footer-left">
                <a href="" class="footer-link">© 2024. All rights reserved</a>
            </div>

            <div class="footer-right">
                <a href="terms.html" class="footer-link">Terms</a>
                <a href="privacy.html" class="footer-link">Privacy</a>
                <a href="copyright.html" class="footer-link">Copyright</a>
                <a href="imprint.html" class="footer-link">Imprint</a>
                <a href="consent.html" class="footer-link">Consent preferences</a>
            </div>
        </div>
    </div>
</footer>
