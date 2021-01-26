<?php
    require_once("connect.php");
    $sql="system('mysql --host=mysql-muffie.alwaysdata.net --user=muffie --password=kamilbaza123 --database=muffie_db< C:\xampp\htdocs\cos\pracownicy.sql')";
    echo("$sql");
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>