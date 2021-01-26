<?php
    $conn= new mysqli("mysql-muffie.alwaysdata.net","muffie","kamilbaza123","muffie_db");
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>