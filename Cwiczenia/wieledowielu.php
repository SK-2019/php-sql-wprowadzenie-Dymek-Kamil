<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styledocw.css">
</head>
<body>
    <div class="con">
    <div id="myWallpaper" class="wallpaper">
        <div class="nav">
            <h1>Kamil Dymek</h1>
            <span onclick="openNav()">&#9776</span>
        </div>
        <div id="mySidenav" class="sidenav">
            <h2>Menu</h2>
            <a href="../index.php" class="sg" id="sg">Strona Główna</a>
            <div class="menuprac" id="menuprac">Pracownicy</div>
                <div id="menup" class="menup">
                    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Dymek-Kamil">GITHUB</a>
                    <a href="../Pracownicy/Pracownicy.php">Pracownicy</a>
                    <a href="../Pracownicy/Pracownicy i Organizacja.php">Pracownicy i Organizacja</a>
                    <a href="../Pracownicy/Funkcje agregujące.php">Funkcje Agregujące</a>
                    <a href="../Pracownicy/data i czas.php">Data i Czas</a>
                </div>
            <div class="menufor" id="menufor">Formularze</div>
                <div id="menuf" class="menuf">
                    <a href="../Formularze/formularz.html">Formularz</a>
                    <a href="../Formularze/daneDoBazy.php">Danedobazy</a>
                </div>
            <div id="menubib" class="menubib">Biblioteka</div>
                <div id="menub" class="menub">
                    <a href="../Biblioteka/książki.php">Książki</a>
                    <a href="../Biblioteka/wypożyczalnia.php">Wypożyczalnia</a>
                </div> 
                <a href="index.html">Flexbox</a>  
        </div>
        <div class="item a">
        <?php
        require_once("../assets/connect.php");
        $sql="Select * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id";
        $result=$conn->query($sql);
        echo("<h2> Zad 1 ".$sql."</h2>");
        echo("<table border=1>");
        echo("<th>Nazwisko</th>");
        echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                    echo("</tr>");}
        echo("</table>"); 
        ?> 
        <?php
        require_once("../assets/connect.php");
        $sql="Select * from autor";
        $result=$conn->query($sql);
        echo("<h2> Zad 2 ".$sql."</h2>");
        echo("<table border=1>");
        echo("<th>Nazwisko</th>");
        echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["nazwisko"]."</td>");
                    echo("</tr>");}
        echo("</table>"); 
        ?> 
        <?php
        require_once("../assets/connect.php");
        $sql="Select * from tytul";
        $result=$conn->query($sql);
        echo("<h2> Zad 3 ".$sql."</h2>");
        echo("<table border=1>");
        echo("<th>Nazwisko</th>");
        echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                    echo("</tr>");}
        echo("</table>"); 
        ?> 
        </div>  
    </div>

</body>
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
var dropdownA = document.getElementsByClassName("opcja 1");
    var i;

    for (i = 0; i < dropdownA.length; i++) {
    dropdownA[i].addEventListener("click", function() {
    this.classList.toggle("activeopcje");
    var dropdownContentA = document.getElementById("alliwant");
    if (dropdownContentA.style.display === "block") {
    dropdownContentA.style.display = "none";
    } else {
    dropdownContentA.style.display = "block";
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
</html>