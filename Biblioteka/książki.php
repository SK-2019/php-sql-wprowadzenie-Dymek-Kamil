<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styledocw.css">
</head>
<body>
<div class="con">
        <div class="nav">
            <?php include("../assets/header.php") ?>
        </div>
        <div class="sidenav">
        <?php 
        include("../assets/menu.php"); 
        ?>  
        </div>
        <div class="item a">
        <?php
                require_once("connect.php");
                $sql="Select * From biblAutor";
                $result=$conn->query($sql); 
                echo("<form action='wypozyczalnia.php' method='POST'>");    
                echo("<select id='autor' name='autor'>");
                        while($row=$result->fetch_assoc()){
                            echo("<option value=".$row['autor'].">".$row['autor']."</option>");}
                            echo("<input type='Submit' value='Sumbit'><br>");
                echo("</select>");

                require_once("connect.php");
                $sql="Select * From biblTytul";
                $result=$conn->query($sql);     
                echo("<select id='tytul' name='tytul'>");
                        while($row=$result->fetch_assoc()){
                            echo("<option value=".$row['tytuł'].">".$row['tytuł']."</option>");}
                            echo("<input type='Submit' value='Sumbit'><br>");
                echo("</select>");
                echo("</form>");
        ?>
        </div>
        <div class="item d">
        <?php
                require_once("connect.php");
                $sql="Select * From biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id";
                $result=$conn->query($sql);
                echo("<h2> Zad 3 ".$sql."</h2>");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Autor</th>");
                    echo("<th>Tytuł</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytuł"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
</body>
</html>