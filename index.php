<?php
    echo("<h1>Kamil Dymek</h1>");
    $conn= new mysqli("mysql-muffie.alwaysdata.net","muffie","AlcdJJdgyP657","muffie_db");
    $sql= ('SELECT * FROM pracownicy');
    $result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>imie</th>");
    echo("<th>dzial</th>");
    echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
    echo("</table>");
?>
