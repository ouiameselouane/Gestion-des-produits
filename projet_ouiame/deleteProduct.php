<?php 
require "connection/db.php";
if (isset($_POST["delete_prod"])) {
    $id = $_POST["delete_prod"];
    $requete = " DELETE FROM products WHERE id='$id'";
    $result = mysqli_query($conn, $requete);
  
    if ($result) {
      header("Location: product.php");
    }
  }


?>