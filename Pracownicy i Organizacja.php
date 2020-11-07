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
            <a class="link d" href="Index.php">Strona Główna</a>
        </div>
        <div class="item a">
        <h1 class="h1zb">Kamil Dymek</h1>
            <h2 class="h2za">Select * From pracownicy, organizacja where dzial=id_org</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org");
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
        <div class="item b">
            <h2 class="h2zb">Select * From pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=4)</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=4)");
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
        <div class="item c">
            <h2 class=h2zc>Select * From pracownicy, organizacja where dzial=id_org and imie like '%a'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie like '%a'");
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
        <div class="item d">
            <h2>Select * From pracownicy, organizacja where dzial=id_org and imie not like '%a'</h2>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie not like '%a'");
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
</body>
</html>
