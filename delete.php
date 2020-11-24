<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
require_once("connect.php");
$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
echo($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
header("location:http://127.0.0.1/cos/insert/danedobazy.html");
?>