<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="item a">
        <?php
        echo("Autor:".$_POST['autor']);
        echo("Tytuł:".$_POST['tytul']);
        ?>
    </div>
</body>
</html>