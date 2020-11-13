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
        <div class="nav1">
                <a class="link g" href="#1">Data i Czas</a>
                <a class="link e" href="#2">Formatowanie dat</a>
            </div>
        <h1>Kamil Dymek</h1>
        <h1 id="1">Data i Czas</h1>
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
    <div class="item i">
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
    <div class="item j">
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
    <div class="item k">
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
    <div class="item l">
        <h2>Select datediff(curdate(),data_urodzenia) as dni, imie from pracownicy</h2>
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
    <div class="item m">
        <h2>Select * from pracownicy where imie not like '%a' order by data_urodzenia asc limit 1</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * from pracownicy where imie not like '%a' order by data_urodzenia asc limit 1");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item n">
    <h1 id="2">Formatowanie Dat</h1>
        <h2>SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as format from pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as format from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["format"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item o">
        <h2>SELECT DATE_FORMAT(CURDATE(), '%W')as data</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SET lc_time_names = 'pl_PL'");
                $result=$conn->query("SELECT DATE_FORMAT(CURDATE(), '%W')as data");
                echo("<table border=1>");
                    echo("<th>Dzień po polsku</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["data"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item p">
        <h2>SELECT *, DATE_FORMAT(data_urodzenia,'%w-%M-%Y') as dat from pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT *, DATE_FORMAT(data_urodzenia,'%w-%M-%Y') as dat from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["dat"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item r">
        <h2>Select curtime(4) as sek</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select curtime(4) as sek");
                echo("<table border=1>");
                    echo("<th>Godzina</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sek"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item s">
        <h2>Select *, Date_format(data_urodzenia,'%Y-%M-%W') as dat from pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("select *, Date_format(data_urodzenia,'%Y-%M-%W') as dat from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["dat"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item t">
        <h2>SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy");
                echo("<table border=1>");
                    echo("<th>Imie</th>");
                    echo("<th>Dni</th>");
                    echo("<th>Godziny</th>");
                    echo("<th>Minuty</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dni"]."</td><td>".$row["godziny"]."</td><td>".$row["minuty"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item u">
        <h2>SELECT DATE_FORMAT('2003-03-11', '%j') as uro</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT DATE_FORMAT('2003-03-11', '%j') as uro");
                echo("<table border=1>");
                    echo("<th>Dzień roku</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["uro"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item ó">
        <h2>SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie, data_urodzenia FROM pracownicy order by 
                case  
                WHEN dzien = 'Monday' THEN 1
                WHEN dzien = 'Tuesday' THEN 2
                WHEN dzien = 'Wednesday' THEN 3
                WHEN dzien= 'Thursday' THEN 4
                WHEN dzien = 'Friday' THEN 5
                WHEN dzien = 'Saturday' THEN 6
                WHEN dzien = 'Sunday' THEN 7
                END ASC"</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie, data_urodzenia FROM pracownicy order by 
                case  
                WHEN dzien = 'Monday' THEN 1
                WHEN dzien = 'Tuesday' THEN 2
                WHEN dzien = 'Wednesday' THEN 3
                WHEN dzien= 'Thursday' THEN 4
                WHEN dzien = 'Friday' THEN 5
                WHEN dzien = 'Saturday' THEN 6
                WHEN dzien = 'Sunday' THEN 7
                END ASC");
                echo("<table border=1>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzień Tygodnia</th>");
                    echo("<th>Data_urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dzien"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item w">
        <h2>SELECT Count(DATE_FORMAT(data_urodzenia, '%W')) as pon FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Monday'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT Count(DATE_FORMAT(data_urodzenia, '%W')) as pon FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Monday'");
                echo("<table border=1>");
                    echo("<th>Pracownicy urodzeni w pon</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["pon"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    <div class="item y">
        <h2>SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc, DATE_FORMAT(data_urodzenia,'%W') as dzien FROM pracownicy group by dzien ORDER BY CASE WHEN dzien = 'Poniedziałek' THEN 1 WHEN dzien = 'Wtorek' THEN 2 WHEN dzien = 'Środa' THEN 3 WHEN dzien= 'Czwartek' THEN 4 WHEN dzien = 'Piątek' THEN 5 WHEN dzien = 'Sobota' THEN 6 WHEN dzien = 'Niedziela' THEN 7 END ASC</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc, DATE_FORMAT(data_urodzenia,'%W') as dzien FROM pracownicy group by dzien ORDER BY CASE WHEN dzien = 'Poniedziałek' THEN 1 WHEN dzien = 'Wtorek' THEN 2 WHEN dzien = 'Środa' THEN 3 WHEN dzien= 'Czwartek' THEN 4 WHEN dzien = 'Piątek' THEN 5 WHEN dzien = 'Sobota' THEN 6 WHEN dzien = 'Niedziela' THEN 7 END ASC");
                echo("<table border=1>");
                    echo("<th>Dzien</th>");
                    echo("<th>Ilośc</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["dzien"]."</td><td>".$row["ilosc"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
    </div>
    </div>
</body>
</html>