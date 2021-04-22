<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamil Dymek</title>
    <link rel="stylesheet" href="assets/styledosg.css">
    <link rel="stylesheet" href="styles.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>src="https://kit.fontawesome.com/a076d05399.js"</script>
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div id="myCon" class="con">
        <div class="wallpaper">
        <div class="nav">
            <?php include("assets/header.php") ?>
        </div>
        <div id="mySidenav" class="sidenav">
        <?php 
        include("assets/menu.php"); 
        ?>
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
 function openNav() {
    if(document.getElementById("mySidenav").style.left === "0px"){
        document.getElementById("mySidenav").style.left = "-250px";
    }
    else{
        document.getElementById("mySidenav").style.left = "0px";
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