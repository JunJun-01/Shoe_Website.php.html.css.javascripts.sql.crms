<?php

    function connection(){
        $server = "localhost";
        $user = "root";
        $pass = ""; 
        $database = "shoedata"; 

        $conn = new mysqli($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    }

?>