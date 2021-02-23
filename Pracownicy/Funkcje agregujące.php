<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="con">
    <div class="nav">
            <h1>Kamil Dymek</h1>
            <span onclick="openNav()">&#9776</span>
        </div>
        <div id="mySidenav" class="sidenav">
            <h2>Menu</h2>
            <a href="../index.php" class="sg" id="sg">Strona Główna</a>
            <div class="menuprac" id="menuprac">Pracownicy</div>
                <div id="menup" class="menup">
                    <a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Dymek-Kamil">GITHUB</a>
                    <a class="link" href="Pracownicy.php">Pracownicy</a>
                    <a class="link" href="Pracownicy i Organizacja.php">Pracownicy i Organizacja</a>
                    <a class="link" href="Funkcje Agregujące.php">Funkcje Agregujące</a>
                    <a class="link" href="Data i Czas.php">Data i Czas</a>
                </div>
            <div class="menufor" id="menufor">Formularze</div>
                <div id="menuf" class="menuf">
                    <a class="link" href="../Formularze/formularz.html">Formularz</a>
                    <a class="link" href="../Formularze/daneDoBazy.php">Danedobazy</a>
                </div>
            <div id="menubib" class="menubib">Biblioteka</div>
                <div id="menub" class="menub">
                    <a class="link" href="../Biblioteka/książki.php">Książki</a>
                    <a class="link" href="../Biblioteka/wypożyczalnia.php">Wypożyczalnia</a>
                </div>   
        </div>
        <div class="item a">
            <h2>Select Sum(zarobki) as sz from pracownicy</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
        <div class="item b">
            <h2>Select Sum(zarobki) as sz from pracownicy where imie like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy where imie like '%a'");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item c">
            <h2>Select sum(zarobki) as sz from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy where imie not like '%a' and (dzial=2 or dzial=3) ");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item d">
            <h2>Select avg(zarobki) as az from pracownicy where imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy where imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item e">
            <h2>Select avg(zarobki) as az from pracownicy where dzial=4</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy where dzial=4");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item f">
            <h2>Select avg(zarobki) as az from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item g">
            <h2>Select count(imie) as ci from pracownicy</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci from pracownicy");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item g">
            <h2>Select count(imie) as ci from pracownicy where imie like '%a' and (dzial=1 or dzial=3)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci from pracownicy where imie like '%a' and (dzial=1 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item h">
            <h2>Select sum(zarobki) as sz from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item i">
            <h2>Select count(imie) as ci from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item j">
            <h2>Select avg(zarobki) as az from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item k">
            <h2>Select sum(zarobki) as sz from pracownicy group by imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy group by imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item l">
            <h2>Select avg(zarobki) as az from pracownicy group by imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy group by imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item m">
            <h2>Select sum(zarobki) as sz, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having sum(zarobki)<28</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having sum(zarobki)<28");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item n">
            <h2>Select avg(zarobki) as az, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>30</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>30");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
        <div class="item n">
            <h2>Select count(imie) as ci, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>2</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>2");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
    </div>
    <script>
    var dropdown = document.getElementsByClassName("menuprac");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("activesidebar");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
 }

 var dropdownfor = document.getElementsByClassName("menufor");
    var i;

    for (i = 0; i < dropdownfor.length; i++) {
    dropdownfor[i].addEventListener("click", function() {
    this.classList.toggle("activesidebar");
    var dropdownContentfor = this.nextElementSibling;
    if (dropdownContentfor.style.display === "block") {
    dropdownContentfor.style.display = "none";
    } else {
    dropdownContentfor.style.display = "block";
    }
    });
 }
 var dropdownbib = document.getElementsByClassName("menubib");
    var i;

    for (i = 0; i < dropdownbib.length; i++) {
    dropdownbib[i].addEventListener("click", function() {
    this.classList.toggle("activesidebar");
    var dropdownContentbib = this.nextElementSibling;
    if (dropdownContentbib.style.display === "block") {
    dropdownContentbib.style.display = "none";
    } else {
    dropdownContentbib.style.display = "block";
    }
    });
 }
 var dropdownpios = document.getElementsByClassName("piosenki");
    var i;

    for (i = 0; i < dropdownpios.length; i++) {
    dropdownpios[i].addEventListener("click", function() {
    var dropdownContentpios = this.nextElementSibling;
    if (dropdownContentpios.style.display === "block") {
    dropdownContentpios.style.display = "none";
    } else {
    dropdownContentpios.style.display = "block";
    }
    });
 }
 function openNav() {
    if(document.getElementById("mySidenav").style.left === "0px"){
        document.getElementById("mySidenav").style.left = "-250px";
    }
    else{
        document.getElementById("mySidenav").style.left = "0px";
    }

}

</script>
</body>
</html>