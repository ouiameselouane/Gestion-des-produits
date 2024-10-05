<?php
require "connection/db.php"; 
if (isset($_POST["addprod_btn"])) {
    $name = $_POST["name"];
    $dec = $_POST["description"];
    $cat = $_POST["category"];
    $quant = $_POST["quantity"];
    $exp = $_POST["expiration"];
    $loc = $_POST["location"];
    $resp = $_POST["responsable"];
    $prix = $_POST["price"];
   
    $requete = "INSERT INTO products(name,description,category,quantite,expiration,location,responsable,price) values('$name ','$dec','$cat', '$quant', '$exp','$loc' ,'$resp','$prix')";
    $result = mysqli_query($conn, $requete);
  
    if ($result) {
      header("Location: product.php");
    }
  }
?>