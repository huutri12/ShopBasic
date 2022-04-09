<?php 
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'flowerpink'
) or die(mysqli_error($mysqli));
?>
