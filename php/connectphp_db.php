<?php
    // connection to the server
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "shoedata";

    $conn = mysqli_connect($host,$user,$password,$database);


    $query = "SELECT * FROM 'shoe' ";
    $result= (mysqli_query($conn, $query));

    // if(mysqli_num_rows($result)>0){
    //     return $result;
    // }
?>