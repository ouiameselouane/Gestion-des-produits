<?php
require "connection/db.php";
if (isset($_POST["category_btn"])) {
  $name = $_POST["category"];
  $requete = "INSERT INTO categories(name) values('$name')";
  $result = mysqli_query($conn, $requete);

  if ($result) {
    header("Location: category.php");
  }
}
?>