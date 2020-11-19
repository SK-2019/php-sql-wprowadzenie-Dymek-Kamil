<?php
  echo("<li> Imie: ".$_POST['Imie']."</li>");
  echo("<li> Dzial: ".$_POST['dzial']."</li>");
  echo("<li> Zarobki: ".$_POST['zarobki']."</li>");
  echo("<li> Data: ".$_POST['data_']."</li>");
require_once("connect.php");
$sql =  "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:http://127.0.0.1/cos/index.php");
?>

