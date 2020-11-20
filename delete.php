<?php
require_once("connect.php");
$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:https://testing-some-stuff.herokuapp.com/daneDoBazy.html");
?>
