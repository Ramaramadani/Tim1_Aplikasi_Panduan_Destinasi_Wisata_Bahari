<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <title>HOME</title>
    <link rel="stylesheet" href="stylesdes1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios"/>
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
  align-items: none;
  justify-content: left;
  min-height: 100vh;
  background: url("pnt5.jpg") no-repeat center;
  background-size: cover;
}

.navbar {
  padding: 5px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 5px;
  margin: 0 auto;
  background-color: rgba(255, 255, 255, 0);
}

img {
  height: 60px;
  margin-left: 88%;
  border-radius: 8px;
}

.back {
  width: 100px;
  position: absolute;
  left: 6%;
  top: 50%;
  transform: translate(-50%, -50%);
  height: 40px;
  border-radius: 12px;
  padding: 8px;
  background: rgb(3, 115, 132);
  align-items: left;
  text-shadow: 1px 1px 5px rgb(0, 0, 0);
}

.back-button {
  width: 50px;
  position: absolute;
  left: 25%;
  top: 5%;
  color: white;
  font-size: 25px;
  border: none;
  cursor: pointer;
  background: none;
  text-shadow: 1px 1px 5px rgb(0, 0, 0);
}

.material-symbols-outlined {
  line-height: 40px;
  border: none;
  outline: none;
  background: none;
  cursor: pointer;
  width: 0px;
  height: 0px;
  color: white;
  text-shadow: 1px 1px 5px rgb(0, 0, 0);
}

h1 {
  font-size: 670%;
  text-shadow: 1px 1px 10px rgb(0, 0, 0);
}

.tentang {
  margin: auto;
  color: white;
  width: 70%;
  text-align: left;
  justify-content: left;
  margin-left: 20px;
  margin-top: 20%;
  text-shadow: 1px 1px 5px rgb(0, 0, 0);
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  display: flex;
}

.container {
  position: absolute;
  bottom: 25%;
  display: flex;
  background: none;
  right: 97%;
}

.container img {
  width: 35px;
  height: 35px;
  object-fit: cover;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.container img:hover {
  transform: scale(1.7);
}

.swiper-button-next {
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute; /* Agar tidak memengaruhi tata letak gambar */
  top: 75%; /* Posisi vertikal sejajar tengah */
  transform: translateY(-50%); /* Koreksi agar benar-benar tengah */
  z-index: 2; /* Supaya muncul di atas gambar */
}

.card-wrapper {
  max-width: 700px;
  margin: 20px;
  padding: 12px 5px;
  overflow: hidden;
  margin-top: 100px;
  margin-left: 540px;
}

.card-list .card-item .image-item {
  user-select: none;
  width: 200px;
  height: 90px;
  border-radius: 12px;
  object-fit: cover;
  object-position: left;
  margin-left: 15px;
  cursor: pointer;
  box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.58);
  transition: transform 0.3s ease;
}

.card-list .card-item .image-item:hover {
  transform: scale(1.1);
}

    </style>
  </head>
  <body>
        <header>
      <div class="navbar">
              <div class="back">
                <a href="destinasi.html">
        <button class="material-symbols-outlined">arrow_back_ios</button>
        <button class="back-button">BACK</button></a>
      </div>
          <img src="Oceara pUTIH.png" />
        </div>
      </div>
    </header>
    <div class="tentang">
      <h1>TANJUNG PINGGIR</h1>
      <p>
        Pantai Mirota adalah salah satu pantai di Batam yang terletak di Jembatan 5 Barelang.
        untuk menuju ke Pantai ini aksesnya cukup mudah dan memakan waktu sekitar 2 - 3 jam
        dari pusat kota.
      </p>
    </div>
    <footer>
<div class="container">
  <img src="4.png" alt="Gambar 1">
  <img src="3.png" alt="Gambar 2">
  <img src="2.png" alt="Gambar 3">
  <img src="1.png" alt="Gambar 4">
</div>
            <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
          <li class="card-item swiper-slide">
            <img src="mirota/mrt1.jpg" alt="img-1" class="image-item" />
          </li>
            <li class="card-item swiper-slide">
            <img src="mirota/mrt2.jpg" alt="img-2" class="image-item" />
          </li>
            <li class="card-item swiper-slide">
            <img src="mirota/mrt3.jpg" alt="img-3" class="image-item" />
          </li>
            <li class="card-item swiper-slide">
            <img src="mirota/mrt4.jpg" alt="img-4" class="image-item" />
          </li>
            <li class="card-item swiper-slide">
            <img src="mirota/mrt5.JPG" alt="img-5" class="image-item" />
        </ul>
        <div class="swiper-button-next"></div>
      </div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script5.js"></script>
  </body>
</html>

