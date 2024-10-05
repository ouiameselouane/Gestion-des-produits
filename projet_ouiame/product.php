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
        <div class="section product">
          <div class="page_indicator">
            <h1>Products</h1>
            <ul>
              <li>
                <a href="index.php">Dashboard</a>
              </li>
              /
              <li>
                <a href="#">Product</a>
              </li>
            </ul>
          </div>
          <div class="action">
            <a href="product-add.php" class="btn-primary">Add product</a>
          </div>
          <div class="table_wrapper">
            <table>
              <thead>
                <tr id="head">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              $requete = "select * from products";
              $result = mysqli_query($conn, $requete);

              if (mysqli_num_rows($result) > 0) {
                while ($prod= mysqli_fetch_assoc($result)) {
              ?>
                  <tr>
                    <td><?= $prod['id'] ?></td>
                    <td><?= $prod["name"] ?></td>
                    <td><?= $prod["description"] ?></td>
                    <td><?= $prod["category"] ?></td>
                    <td><?= $prod["price"] ?></td>
                   
                  
                    <td>

                      <form method="POST" action="deleteProduct.php">
                        <button name="delete_prod" value="<?= $prod['id'] ?>" class="btn-red">
                          <ion-icon name="trash-outline"></ion-icon>
                          Delete
                        </button>
                      </form>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>

            </table>
          </div>
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