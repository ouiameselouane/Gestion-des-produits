<?php
require "connection/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <style>
    body {
      background-image: url('night-4702174_960_720.webp');
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .hi-slide {
      position: relative;
      width: 100%;
      max-width: 700px;
      height: 100%;
      max-height: 500px;
      border-radius: 30px;
      margin: 60px auto 0;
      overflow: hidden;
    }

    .hi-slide .hi-next,
    .hi-slide .hi-prev {
      position: absolute;
      top: 50%;
      width: 40px;
      height: 40px;
      margin-top: -20px;
      border-radius: 50%;
      line-height: 40px;
      text-align: center;
      cursor: pointer;
      background-color: rgba(243, 240, 240, 0.7);
      color: black;
      transition: all 0.3s;
      font-size: 20px;
      font-weight: bold;
      z-index: 1;
    }

    .hi-slide .hi-prev {
      left: 10px;
    }

    .hi-slide .hi-prev::before {
      content: '<';
    }

    .hi-slide .hi-next {
      right: 10px;
    }

    .hi-slide .hi-next::after {
      content: '>';
    }

    .hi-slide>ul {
      list-style: none;
      position: relative;
      width: calc(800px * 14);
      /* Adjust according to the number of slides */
      height: 700px;
      margin: 0;
      padding: 0;
      transition: transform 0.3s;
    }

    .hi-slide>ul>li {
      float: left;
      width: 700px;
      height: 100%;
      max-height: 500px;
      overflow: hidden;
    }

    .hi-slide>ul>li>img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <header>
    <h1>Gestion de Produits</h1>
  </header>
  <div class="global_wrapper">
    <aside class="left-colomn">
      <nav>
        <ul>
          <li>
            <a href="index.php"><ion-icon name="home"></ion-icon>Home</a>
          </li>
          <li>
            <a href="product.php">
              <ion-icon name="grid-outline"></ion-icon>Products</a>
          </li>
          <li>
            <a href="category.php"><ion-icon name="copy-outline"></ion-icon>Categories</a>
          </li>
          <li>
            <a href="stock.php"><ion-icon name="albums-outline"></ion-icon>Stockage</a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="main_wrapper">
      <div class="page_indicator">
        <h1>Dashboard</h1>
      </div>
      <div class="main">
        <div class="dashboard">
          <div id="frec1" class="rec1">
            <a href="product.php">
              <div>
                Total Products
                <ion-icon name="grid"></ion-icon>
              </div>
              <?php
              $requete = "select * from products";
              $result = mysqli_query($conn, $requete);
              if (mysqli_num_rows($result) > 0) {
                echo '<h1>' . mysqli_num_rows($result) . '</h1>';
              } else {
                echo '<h1>0</h1>';
              }
              ?>
            </a>
          </div>
          <div class="rec1">
            <a href="category.php">
              <div>
                Total Categories
                <ion-icon name="apps"></ion-icon>
              </div>
              <?php
              $requete = "select * from categories";
              $result = mysqli_query($conn, $requete);
              if (mysqli_num_rows($result) > 0) {
                echo '<h1>' . mysqli_num_rows($result) . '</h1>';
              } else {
                echo '<h1>0</h1>';
              }
              ?>
            </a>
          </div>
        </div>
      </div>
      <div class="hi-slide">
        <div class="hi-prev"></div>
        <div class="hi-next"></div>
        <ul>
          <li><img src="assets/images/jeans-t-shirt.jpeg" alt="Jeans and T-Shirt"></li>
          <li><img src="assets/images/blush.jpg" alt="blush"></li>
          <li><img src="assets/images/Capture .jpg" alt="Capture"></li>
          <li><img src="assets/images/coffe.jpg" alt="Coffee"></li>
          <li><img src="assets/images/mobiles.webp" alt="Mobile"></li>
          <li><img src="assets/images/dressbleu.jpeg" alt="Blue Dress"></li>
          <li><img src="assets/images/iphone.jpg" alt="iPhone"></li>
          <li><img src="assets/images/laptop.jpg" alt="Laptop"></li>
          <li><img src="assets/images/mobile.jpg" alt="Mobile"></li>
          <li><img src="assets/images/dressgreen.jpeg" alt="Green Dress"></li>
          <li><img src="assets/images/nutella.webp" alt="Nutella"></li>
          <li><img src="assets/images/chemisegreen.png" alt="chemisegreen"></li>
          <li><img src="assets/images/pc.jpg" alt="PC"></li>
          <li><img src="assets/images/chemiserose.jpg" alt="chemiserose"></li>
        </ul>
      </div>
      <div id="foot">
        <footer>
          <p>&copy; 2024 Gestion des produits</p>
        </footer>
      </div>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var currentIndex = 0;
      var slides = document.querySelectorAll('.hi-slide > ul > li');
      document.querySelector('.hi-next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlide();
      });
      document.querySelector('.hi-prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlide();
      });

      function updateSlide() {
        var slideWidth = slides[0].offsetWidth;
        var offset = -currentIndex * slideWidth;
        document.querySelector('.hi-slide > ul').style.transform = 'translateX(' + offset + 'px)';
      }
    });
  </script>
</body>

</html>