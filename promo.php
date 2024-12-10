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
          <a href="index.php">HOME</a>
          <a href="destinasi.php">DESTINASI</a>
          <a href="promo.php">PROMO</a>
        </nav>
        <a href="login.php" id="user">
          <img src="user-circle-fill.png" />
        </a>
      </div>
      <body>
    <div class="slider">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="1.png" alt="Labuan Bajo">
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="2.png" alt="Pulau Padar">
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="3.png" alt="Paket Snorkeling">
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <script src="script6.js"></script>
</body>
<footer style="text-align: center; padding: 20px; background-color: white; font-size: 14px; color: black; border-top: 1px solid #ddd;">
  <div style="margin-bottom: 40px;">
   <img src="Oceara.png" alt="Logo" style="height: 130px; margin-bottom: 10px; margin-left: -850px; " />
  </div>
<div style="margin-top: 10px; margin-right: 70px;">
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 10px;">
        <a href="" style="text-decoration: none; color: black; margin-left: 70px;">© 2024. All rights reserved</a>
        <div style="display: flex; gap: 70px;">
            <a href="terms.html" style="text-decoration: none; color: black;">Terms</a>
            <a href="privacy.html" style="text-decoration: none; color: black;">Privacy</a>
            <a href="copyright.html" style="text-decoration: none; color: black;">Copyright</a>
            <a href="imprint.html" style="text-decoration: none; color: black;">Imprint</a>
            <a href="consent.html" style="text-decoration: none; color: black;">Consent preferences</a>
        </div>
    </div>
</div>

</div>

  </div>
</footer>

</html>
    </header>

  </body>
</html>
