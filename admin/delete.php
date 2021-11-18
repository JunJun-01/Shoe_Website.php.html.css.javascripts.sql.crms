<?php
     $conn = mysqli_connect("localhost","root","","shoedata");
     $id = $_GET['ShoeID'];
     echo $_GET['ShoeID'];
     $query = "DELETE FROM Shoe WHERE ShoeID='$id'";
     $conn->query($query) or die($conn->error);
     echo "Record has been deleted!";
     echo header("Location: listing.php");
?>