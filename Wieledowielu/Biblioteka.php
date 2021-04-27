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
    <div class="wallpaper">
        <div class="nav">
            <?php include("../assets/header.php") ?>
            <span onclick="openNav()">&#9776</span>
        </div>
        <div id="mySidenav" class="sidenav">
        <?php 
        include("../assets/menu.php"); 
        ?>
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
</html>
