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
        <a class="link e" href="https://github.com/SK-2019/php-sql-wprowadzenie-Dymek-Kamil" >GITHUB</a>
            <a class="link a" href="Pracownicy.php">Pracownicy</a>
            <a class="link b" href="Pracownicy i Organizacja.php">Pracownicy i Organizacja</a>
            <a class="link c" href="Funkcje agregujące.php">Funkcje agregujące</a>
            <a class="link d" href="index.php">Index</a>
            <a class="link h" href="data i czas.php">Data i Czas</a>
        </div>
        <div class="item a">
        <h1>Kamil Dymek</h1>
        <h2>Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                    echo("<th>Wiek</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item b">
        <h2>Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select *, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org and nazwa_dzial='serwis'");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                    echo("<th>Wiek</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item c">
        <h2>Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy");
                echo("<table border=1>");
                    echo("<th>Suma Lat</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sl"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item d">
        <h2>Select sum(year(curdate())-year(data_urodzenia)) as sl, nazwa_dzial from pracownicy, organizacja where dzial=id_org and nazwa_dzial='handel'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(year(curdate())-year(data_urodzenia)) as sl, nazwa_dzial from pracownicy, organizacja where dzial=id_org and nazwa_dzial='handel'");
                echo("<table border=1>");
                    echo("<th>Suma Lat</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sl"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item e">
        <h2>Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy where imie like '%a'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy where imie like '%a'");
                echo("<table border=1>");
                    echo("<th>Suma Lat</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sl"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item f">
        <h2>Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy where imie not like '%a'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(year(curdate())-year(data_urodzenia)) as sl from pracownicy where imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>Suma Lat</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sl"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item g">
        <h2>Select avg(year(curdate())-year(data_urodzenia)) as al, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select avg(year(curdate())-year(data_urodzenia)) as al, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial");
                echo("<table border=1>");
                    echo("<th>Średnia Lat</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["al"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item h">
        <h2>Select sum(year(curdate())-year(data_urodzenia)) as sl, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select sum(year(curdate())-year(data_urodzenia)) as sl, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial");
                echo("<table border=1>");
                    echo("<th>Suma Lat</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sl"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item h">
        <h2>Select max(year(curdate())-year(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select max(year(curdate())-year(data_urodzenia)) as maxwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial");
                echo("<table border=1>");
                    echo("<th>Wiek</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["maxwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item g">
        <h2>Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial");
                echo("<table border=1>");
                    echo("<th>Wiek</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["minwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item g">
        <h2>Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial, imie from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial, imie from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial");
                echo("<table border=1>");
                    echo("<th>Wiek</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["minwiek"]."</td><td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item g">
        <h2>Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial, imie from pracownicy, organizacja where dzial=id_org and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by nazwa_dzial</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select datediff(curdate(),data_urodzenia) as dni, imie from pracownicy");
                echo("<table border=1>");
                    echo("<th>Imie</th>");
                    echo("<th>Dni</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dni"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    </div>
</body>
</html>