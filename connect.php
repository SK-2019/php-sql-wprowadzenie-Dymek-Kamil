<?php
//require_once("config.php");
    $conn= new mysqli($_SERVER['addres'],$_SERVER['username'],$_SERVER['pass'],$_SERVER['db']);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>

