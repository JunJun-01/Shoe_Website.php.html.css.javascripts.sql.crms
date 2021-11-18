<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
  }

  $conn = mysqli_connect("localhost","root","","shoedata");
  $id = $_SESSION['username'];
  $query = "DELETE FROM cart WHERE uname='$id'";
  $conn->query($query) or die($conn->error);
  echo "<script>";
  echo "alert('Receipt Have Sended to Your Email! Thank you!')";
  echo "</script>";
  echo header("Location: ../main.php");
?>
