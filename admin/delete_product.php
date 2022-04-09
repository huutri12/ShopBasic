<?php
include('./config/db.php');
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM product WHERE product_id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['delete'] = 'delete';
  header('Location: index.php');
}
?>
