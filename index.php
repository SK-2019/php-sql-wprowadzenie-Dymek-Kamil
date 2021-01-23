<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledosg1.css">
    <link rel="stylesheet" href="styles.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>src="https://kit.fontawesome.com/a076d05399.js"</script>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js"></script>
</head>
<body>
<iframe id="alliwant" class="alliwant" width="560" height="315" src="https://www.youtube.com/embed/RmUWWVZw28E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div id="myCon" class="con">
        <div id="myWallpaper" class="wallpaper">
        <div class="nav">
            <h1>Kamil Dymek</h1>
            <span onclick="openNav()">&#9776</span>
        </div>
        <div class="piosenki">Menu</div>
        <div id="menupiosenki" class="menupiosenki">
                <div class="opcja 1" onclick="openA()">Piosenka</div>
                <div class="opcja 2">Opcja 5</div>
                <div class="opcja 3">Opcja 6</div>
            </div>
        <div id="mySidenav" class="sidenav">
            <h2>Menu</h2>
            <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</div>
            <div class="menuprac" id="menuprac">Pracownicy</div>
                <div id="menup" class="menup">
                    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Dymek-Kamil">GITHUB</a>
                    <a href="Pracownicy/Pracownicy.php">Pracownicy</a>
                    <a href="Pracownicy/Pracownicy i Organizacja.php">Pracownicy i Organizacja</a>
                    <a href="Pracownicy/Funkcje Agregujące.php">Funkcje Agregujące</a>
                    <a href="Pracownicy/Data i Czas.php">Data i Czas</a>
                </div>
            <div class="menufor" id="menufor">Formularze</div>
                <div id="menuf" class="menuf">
                    <a href="Formularze/formularz.html">Formularz</a>
                    <a href="Formularze/daneDoBazy.php">Danedobazy</a>
                </div>
            <div id="menubib" class="menubib">Biblioteka</div>
                <div id="menub" class="menub">
                    <a href="Biblioteka/książki.php">Książki</a>
                    <a href="Biblioteka/wypożyczalnia.php">Wypożyczalnia</a>
                </div>   
        </div>
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
 function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("myCon").style.marginleft = "250px";
}
function closeNav() {
    document.getElementById("mySidenav").style.left = "-250px";
    document.getElementById("myCon").style.marginleft = "0px";
    document.getElementById("MenuP").style.display = "none";
    document.getElementById("menuf").style.display = "none";
    document.getElementById("menub").style.display = "none";
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
</script>
</html>