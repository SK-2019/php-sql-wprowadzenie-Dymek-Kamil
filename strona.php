<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="con">
        <div class="nav">
            <a class="link z" href="index.php">Wróć do strony głównej</a>
        </div>
        <div class="item b">
            <h1>Dodano:</h1>
<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']);;
      require_once("connect.php");
      $sql =  "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    ?>
    </div>
    </div>
</body>
</html>
