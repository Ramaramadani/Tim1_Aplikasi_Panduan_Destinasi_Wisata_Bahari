<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESTINASI</title>
    <link rel="stylesheet" href="styles4.css" />
  </head>
  <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Didact Gothic", sans-serif;
  font-weight: 600;
  font-style: normal;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: aliceblue;
  background-size: cover;
}
.navbar {
  background: rgba(2, 75, 118, 0.9);
  padding: 0px;
  color: white;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  background-color: rgba(2, 75, 118, 0.9);
}
.logo {
  height: 50px;
}

nav a {
  color: white;
  text-decoration: none;
  margin: 30px;
  font-size: 15px;
  justify-content: center;
  text-align: center;
}

nav a:hover {
  color: rgb(90, 170, 241);
}
.container {
  margin: 100px;
}

#user {
  margin-left: 90px;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f0f8ff;
}

.slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    box-sizing: border-box;
    position: relative;
    text-align: center;
}

.slide img {
    width: 100%;
    height: auto;
}

.slide-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 8px;
}

.slide-content h2 {
    font-size: 2rem;
    margin: 0;
}

.slide-content p {
    margin: 10px 0;
}

.pesan-btn {
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}
</style>
    <header>
      <div class="navbar">
        <img src="Oceara pUTIH.png" alt="Logo" class="logo" />
        <nav>
          <a href="#">HOME</a>
          <a href="#">DESTINASI</a>
          <a href="#">PROMO</a>
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
                <img src="pnt1.jpg" alt="Labuan Bajo">
                <div class="slide-content">
                    <h2>Paket Wisata Labuan Bajo</h2>
                    <p>3D2N - Pulau Kelor - Pulau Padar - Komodo</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="pnt2.jpg" alt="Pulau Padar">
                <div class="slide-content">
                    <h2>Nikmati Hiburan Anda bersama Kami!</h2>
                    <p>Pulau Padar - Pantai Pink</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="pnt1.jpg" alt="Paket Snorkeling">
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
    <script src="script6.js"></script>
</body>
</html>
    </header>
  </body>
</html>
