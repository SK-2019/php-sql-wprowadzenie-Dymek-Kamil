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
        <div class="item b">
            <h1>Dodano:</h1>
<?php
        echo("<li> Imie:".$_POST['imie']."</li>");
        echo("<li> Dzial:".$_POST['dzial']."</li>");
        echo("<li> Zarobki:".$_POST['zarobki']."</li>");
        echo("<li> Data:".$_POST['data_']."</li>");
    ?>
    </div>
    </div>
</body>
</html>