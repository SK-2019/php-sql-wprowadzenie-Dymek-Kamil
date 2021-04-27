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
    <div class="wallpaper">
        <div class="nav">
            <?php include("../assets/header.php") ?>
        </div>
        <div id="mySidenav" class="sidenav">
        <?php 
        include("../assets/menu.php"); 
        ?>
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
</body>
</html>