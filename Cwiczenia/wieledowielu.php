<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="con"></div>
        <div class="item a">
<?php
        require_once("../assets/connect.php");
        $sql="Select * from pracownik, dzial where dzial_id=dzial.id";
        $result=$conn->query($sql);
        echo("<h2> Zad 1 ".$sql."</h2>");
        echo("<table border=1>");
        echo("<th>Id</th>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa Dzialu</th>");
        echo("<th>Wynagrodzenie</th>");
        echo("<th>Data Urodzenia</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwaDzial"]."</td><td>".$row["wynagrodzenie"]."</td><td>".$row["dataUrodzenia"]."</td>");
                    echo("</tr>");}
                    echo("</table>"); 
                    ?>
        </div>
        <div class="item b">
        <?php
        require_once("../assets/connect.php");
        $sql="Select * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id";
        $result=$conn->query($sql);
        echo("<h2> Zad 2 ".$sql."</h2>");
        echo("<table border=1>");
        echo("<th>Nazwisko</th>");
        echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                    echo("</tr>");}
        echo("</table>"); 
        ?> 
        </div>  
    </div>

</body>
</html>
