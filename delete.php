<?php
require_once("connect.php");
$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:http://127.0.0.1/cos/insert/danedobazy.html");
?>