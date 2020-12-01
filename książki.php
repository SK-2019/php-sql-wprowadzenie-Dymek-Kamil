<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="con">
        <div class="nav">
        <a class="link a" href="https://github.com/SK-2019/php-sql-wprowadzenie-Dymek-Kamil" >GITHUB</a>
            <a class="link e" href="index.php">Index</a>
            <a class="link b" href="Pracownicy.php">Pracownicy</a>
            <a class="link c" href="Pracownicy i Organizacja.php">Pracownicy i Organizacja</a>
            <a class="link d" href="Funkcje agregujące.php">Funkcje agregujące</a>
            <a class="link h" href="data i czas.php">Data i Czas</a>
            <a class="link z" href="formularz.html">Formularz</a>
            <a class="link y" href="daneDoBazy.php">DaneDoBazy</a>
            <a class="link g" href="książki.php">Książki</a>
        </div>
        <div class="item a">
        <?php
                require_once("connect.php");
                $sql="Select * From biblAutor";
                $result=$conn->query($sql);
                echo("<h2> Zad 1 ".$sql."</h2>");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Autor</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        <div class="item b">
        <?php
                require_once("connect.php");
                $sql="Select * From biblTytul";
                $result=$conn->query($sql);
                echo("<h2> Zad 2 ".$sql."</h2>");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Tytuł</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["tytuł"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        <div class="item c">
        <?php
                require_once("connect.php");
                $sql="Select * From biblAutor_biblTytul";
                $result=$conn->query($sql);
                echo("<h2> Zad 3 ".$sql."</h2>");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>ID Autor</th>");
                    echo("<th>ID Tytuł</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["biblAutor_id"]."</td><td>".$row["biblTytul_id"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        <div class="item d">
        <?php
                require_once("connect.php");
                $sql="Select * From biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id";
                $result=$conn->query($sql);
                echo("<h2> Zad 3 ".$sql."</h2>");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Autor</th>");
                    echo("<th>Tytuł</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytuł"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
</body>
</html>