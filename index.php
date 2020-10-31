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
    <a href="#"><img class="obraz" src=p.png></a>
    <a href="#"><img class="obraz1" src=p.png></a>
        <div class="item a">
            <h2 class="h2za">Select * From pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        <div class="item b">
            <h1 class="h1zb">Kamil Dymek</h1>
            <h2 class="h2zb">Zad 2 Select * From pracownicy where imie like '%a' and dzial between 2 and 4</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy where imie like '%a' and dzial between 2 and 4");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item c">
            <h2 class=h2zc>Zad 3 Select avg(zarobki), dzial From pracownicy group by dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select avg(zarobki), dzial From pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>Avg zarobki</th>");
                    echo("<th>Dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["avg(zarobki)"]."</td><td>".$row["dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item d">
            <h2>Zad 4 Select * From pracownicy where imie not like '%a' and zarobki between 15 and 50</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy where imie not like '%a' and zarobki between 15 and 50");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item e">
            <h2>Zad 5 Select * From pracownicy where zarobki>15 and (dzial=1 or dzial=4)</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy where zarobki>15 and (dzial=1 or dzial=4)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
    </div>
</body>
</html>