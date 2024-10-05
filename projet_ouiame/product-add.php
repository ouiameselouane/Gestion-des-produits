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
            <a href="category.php"><ion-icon name="copy-outline"></ion-icon> Categories</a>
          </li>
          
          <li>
            <a href="stock.php"><ion-icon name="albums-outline"></ion-icon>Stockage</a>
          </li>
          
        </ul>
      </nav>
    </aside>
    <div class="main_wrapper">
      <div class="main">
        <div class="prodadd">
          <div class="page_indicator">
            <h1>Products</h1>
            <ul>
              <li>
                <a href="index.php">Dashboard</a>
              </li>
              /
              <li>
                <a href="product.php">Product</a>
              </li>
              /
              <li>
                <a href="#">Add</a>
              </li>
            </ul>
          </div>
          <a href="product.php" class="btn-red">Back</a>

          <form action="addProduct.php" method="post">
            <div class="input_group"> 
              <label>Name:</label>
              <input type="text" required name="name" placeholder="Enter the product name" />
              </div>
           <div class="input_group">
              <label>Category:</label>
             
              <select name="category">
                      <option value="">Select Category</option>
                      <?php
                     $requete="select * from categories";
                     $reslt=mysqli_query($conn,$requete);

                     if(mysqli_num_rows($reslt)>0){
                     
                      while($prod=mysqli_fetch_assoc($reslt)){
                        ?>
                        <option value="<?= $prod["name"] ?>"><?= $prod["name"] ?></option>
                        <?php
                      }
                     }
                     ?>
                    </select>
              </div>
              <div class="input_group">
              <label>Decription:</label>
              <textarea name="description" rows="4"></textarea>
              </div>
              <div class="input_group">
              <label>Quantité:</label>
              <input type="number" required name="quantity" placeholder="quantity" />
              </div>
              <div class="input_group">
              <label>Responsable:</label>
              <input type="text" required name="responsable" placeholder="responsable" />
              </div>
              <div class="input_group">
              <label>Location:</label>
              <input type="text" required name="location" placeholder="location" />
              </div>
              <div class="input_group">
              <label>Experation:</label>
              <input type="text" required name="expiration" placeholder="expiration"/>
              </div>
              <div class="input_group">
              <label>Prix:</label>
              <input type="number" required name="price" placeholder="Price" />
              </div>
              <div class="action">
                <button type="submit" name="addprod_btn" class="btn-primary">Add now</button>
              </div>
          </form>
        </div>
          
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
</body>

</html>