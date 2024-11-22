<?php
// Anda dapat menambahkan kode PHP di sini jika perlu
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
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
        background: url("pnti.jpg") no-repeat center;
        background-size: cover;
      }
      .navbar {
        background: rgba(2, 75, 118, 0.9);
        padding: 5px;
        color: white;
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
      .logo {
        height: 60px;
      }
      .judul {
        height: 80%;
        padding: 10px;
        margin: 60px auto;
        width: 50%;
        margin-left: 300px;
        margin-right: 300px;
        margin-bottom: 120px;
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
      .search-bar {
        width: 530px;
        position: absolute;
        left: 49%;
        top: 5%;
        transform: translate(-50%, -50%);
        height: 60px;
        border-radius: 40px;
        padding: 10px;
        background: rgba(255, 255, 255, 0.509);
        align-items: center;
        margin-top: 370px;
      }
      .search-text {
        line-height: 10px;
        background: none;
        border: none;
        outline: none;
        width: 480px;
        padding-left: 15px;
        font-size: 25px;
        color: rgb(3, 80, 148);
      }
      .material-symbols-outlined {
        line-height: 40px;
        border: none;
        outline: none;
        background: none;
        cursor: pointer;
        width: 24px;
        height: 24px;
      }
      #user {
        margin-left: 90px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar">
        <img src="Oceara pUTIH.png" alt="Logo" class="logo" />
        <nav>
          <a href="index.php">HOME</a>
          <a href="destinasi.php">DESTINASI</a>
          <a href="promo.php">PROMO</a>
        </nav>
        <a href="login1.php" id="user">
          <img src="user-circle-fill.png" alt="user-icon" />
        </a>
      </div>
    </header>
    <img src="JUDUL.png" alt="judul" class="judul" />
    <div class="search-bar">
      <input class="search-text" type="text" />
      <button type="submit" class="material-symbols-outlined">search</button>
    </div>
  </body>
</html>
