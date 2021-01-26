<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledoformularz1.css">
</head>
<body>
    <div class="con">
        <div class="item b">
            <h1>Wyświetla:</h1>
<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']); 

    ?>
    <a class="k" href="index.php">Wróć do strony głównej</a>
    </div>
    </div>
</body>
</html>