<?php
require_once("connect.php");
$sql =  "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
echo($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

