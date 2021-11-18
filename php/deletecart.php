<?php
session_start();

// error_reporting(0);

// if (!isset($_SESSION['username'])) {
//   header("Location: index.php");
// }

// $con = mysqli_connect("localhost","root","","shoedata");
// $id = $_GET['id'];
// $name = $_GET['name'];
// $queary = "DELETE FROM `cart` WHERE `shname` = $id AND `shname` = $name";
// $del = mysqli_query($con,$queary);

// $conn = mysqli_connect("localhost","root","","shoedata");
//     $id = $_GET['id'];
//     $name = $_GET['name'];
//      $query = "DELETE FROM cart WHERE uname ='".$_GET['id']."' AND shname ='".$_GET['name']."' ";
//      $conn->query($query) or die($conn->error);
//      echo "Record has been deleted!";
//      echo header("Location: ../cartpage.php");

$name = $_GET['id'];
$username = $_GET['name'];
echo $name;
echo $username;

$conn = mysqli_connect("localhost","root","","shoedata");

$query = "DELETE FROM cart WHERE shname='$name' AND uname='$username'";
mysqli_query($conn,$query);


 echo header("Location: ../cartpage.php");

?>
