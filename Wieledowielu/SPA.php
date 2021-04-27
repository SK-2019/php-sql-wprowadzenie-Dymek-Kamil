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
            <div class="nav">
                <?php 
                    include("../assets/header.php") 
                ?>
            </div>
            <div id="Sidenav" class="sidenav">
                <?php 
                    include("../assets/menu.php"); 
                ?>
            </div>
            <div class="item a">
                <?php
                    require_once("../assets/connect.php");
                    $sql="Select * from klienci";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 1 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Klient</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klient"]."</td>");
                                echo("</tr>");}
                    echo("</table>");
                ?>
            </div>
            <div class="item b">
                <?php
                    require_once("../assets/connect.php");
                    $sql="Select * from fryzjerzy";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 2 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Fryzjer</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td>");
                                echo("</tr>");}
                    echo("</table>");
                ?>
            </div>
            <div class="item c">
                <?php
                    require_once("../assets/connect.php");
                    $sql="Select * from fryzjerzy, klienci, fryzjerzy_klienci where fryzjerzy.id=id_fryzjerzy and klienci.id=id_klienci";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 3 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Fryzjer</th>");
                    echo("<th>Klient</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td><td>".$row["klient"]."</td>");
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