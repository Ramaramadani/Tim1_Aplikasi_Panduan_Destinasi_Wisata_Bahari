<?php
// You can add PHP code here if needed
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>HOME</title>
    <link rel="stylesheet" href="elemen/css/des1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios"/>
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
        <img src="Oceara pUTIH.png" />
      </div>
    </header>

    <div class="tentang">
      <h1>MIROTA</h1>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem minima
        perferendis tempora odio, necessitatibus fugit quibusdam temporibus sit
        aliquid officia deleniti nulla fugiat voluptates aspernatur expedita,
        ratione suscipit harum consequuntur!
      </p>
    </div>

    <footer>
      <div class="container">
        <img src="elemen/image/4.png" alt="Gambar 1">
        <img src="elemen/image/3.png" alt="Gambar 2">
        <img src="elemen/image/2.png" alt="Gambar 3">
        <img src="elemen/image/1.png" alt="Gambar 4">
      </div>

      <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt1.jpg" alt="img-1" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt2.jpg" alt="img-2" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt3.jpg" alt="img-3" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt4.jpg" alt="img-4" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt5.jpg" alt="img-5" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt6.jpg" alt="img-6" class="image-item" />
          </li>
          <li class="card-item swiper-slide">
            <img src="elemen/image/pnt7.jpg" alt="img-7" class="image-item" />
          </li>
        </ul>
        <div class="swiper-button-next"></div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="elemen/js/destinasi.js"></script>
  </body>
</html>
