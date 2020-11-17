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
        </div>
    <form action="" method="POST">
        <input type="text" name="Hej" placeholder="Imie">
        <input type="submit" value="Wyślij">
    </form>
        <div class="item a">
        <h1 class="h1zb">Kamil Dymek</h1>
            <h2 class="h2za">Select count(imie) as ci, dzial, nazwa_dzial  From pracownicy, organizacja where dzial=id_org group by dzial</h2>
            <div class="">
        <?php
                require_once("connect.php");
                $result=$conn->query("Select count(imie) as ci, dzial, nazwa_dzial  From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Count(Imie)</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_Dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        </div>
        <div class="item b">
            <h2 class="h2zb">Zad 2 Select * From pracownicy where imie like '%a' and dzial between 2 and 4</h2>
            <div class="">
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie like '%a' and dzial between 2 and 4");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            </div>
        </div>
        <div class="item c">
            <h2 class=h2zc>Zad 3 Select avg(zarobki), dzial From pracownicy group by dzial</h2>
            <div class="">
        <?php
                require_once("connect.php");
                $result=$conn->query("Select avg(zarobki), dzial, nazwa_dzial From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Avg zarobki</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["avg(zarobki)"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            </div>
        </div>
        <div class="item d">
            <h2>Zad 4 Select * From pracownicy where imie not like '%a' and zarobki between 15 and 50</h2>
            <div class="">
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie not like '%a' and zarobki between 15 and 50");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            </div>
        </div>
        <div class="item e">
            <h2>Zad 5 Select * From pracownicy where zarobki>15 and (dzial=1 or dzial=4)</h2>
            <div class="">
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and zarobki>15 and (dzial=1 or dzial=4)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            </div>
        </div>
    </div>
</body>
</html>
