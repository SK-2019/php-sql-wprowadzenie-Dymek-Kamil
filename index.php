<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamil Dymek</title>
    <link rel="stylesheet" href="assets/styledosg.css">
    <script src="assets/script.js"></script>
</head>
<body>
    <div class="con">
        <div class="wallpaper">
            <div class="nav">
                <?php 
                    include("assets/header.php") 
                ?>
            </div>
            <div id="Sidenav" class="sidenav">
                <?php 
                    include("assets/menu.php"); 
                ?>
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
    if(document.getElementById("Sidenav").style.left === "0px"){
        document.getElementById("Sidenav").style.left = "-250px";
    }
    else{
        document.getElementById("Sidenav").style.left = "0px";
    }

}
var dropdowncw = document.getElementsByClassName("menucw");
    var i;

    for (i = 0; i < dropdownbib.length; i++) {
    dropdowncw[i].addEventListener("click", function() {
    this.classList.toggle("activesidebar");
    var dropdownContentcw = this.nextElementSibling;
    if (dropdownContentcw.style.display === "block") {
    dropdownContentcw.style.display = "none";
    } else {
    dropdownContentcw.style.display = "block";
    }
    });
 }
</script>
</html>