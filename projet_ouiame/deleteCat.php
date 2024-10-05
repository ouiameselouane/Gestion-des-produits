<?php
require "connection/db.php"; 
if (isset($_POST["delete_btn"])) {
    $id = $_POST["delete_btn"];
    $requete = "delete from categories WHERE id='$id'";
    $result = mysqli_query($conn, $requete);
  
    if ($result) {
      header("Location: category.php");
    }
  }
 ?>