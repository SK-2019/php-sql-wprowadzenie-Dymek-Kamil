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
                    $sql="Select * from produkty";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 1 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Produkt</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["produkt"]."</td>");
                                echo("</tr>");}
                    echo("</table>");
                ?>
            </div>
            <div class="item b">
                <?php
                    require_once("../assets/connect.php");
                    $sql="Select * from producenci";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 2 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Producent</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["producenci"]."</td>");
                                echo("</tr>");}
                    echo("</table>");
                ?>
            </div>
            <div class="item c">
                <?php
                    require_once("../assets/connect.php");
                    $sql="Select * from produkty, producenci, produkty_producenci where produkty.id=id_produkty and producenci.id=id_producenci order by produkty_producenci.id asc";
                    $result=$conn->query($sql);
                    echo("<h2> Zad 3 ".$sql."</h2>");
                    echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Mechanik</th>");
                    echo("<th>Rejstracja</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["produkt"]."</td><td>".$row["producenci"]."</td>");
                                echo("</tr>");}
                    echo("</table>");
                ?>
            </div>
    </div>
</body>
</html>