<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="con">
    <div class="item a">
    <?php
        echo("<h1>Kamil Dymek</h1>");
        echo("<h2>Zad 1 Select * FROM pracownicy</h2>");
        function worker($F_sql){
            $conn= new mysqli("mysql-muffie.alwaysdata.net","muffie","kamilbaza123","muffie_db");
            $result=$conn->query($F_sql);
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
        }
        worker("Select * FROM pracownicy");
    ?>
    </div>
    <div class="item b">
    <?php
    echo("<h2>Zad 2 Select * FROM pracownicy where imie not like '%a'</h2>");
    worker("Select * FROM pracownicy where imie not like '%a'");
    ?>
    </div>
    <div class="item c">
    <?php
    echo("<h2>Zad 3 Select * FROM pracownicy where zarobki between 15 and 50 and (dzial=3 or dzial=1)</h2>");
    worker("Select * FROM pracownicy where (dzial=3 or dzial=1) and zarobki between 15 and 50");
    ?>
    </div>
    <div class="item d">
    <?php
    echo("<h2>Zad 4 Select * FROM pracownicy where imie like '%a' and zarobki<20</h2>");
    worker("Select * FROM pracownicy where imie like '%a' and zarobki<20");
    ?>
    </div>
    <div class="item e">
    <?php
    echo("<h2>Zad 5 Select * FROM pracownicy where zarobki>10 and (dzial=1 or dzial=3)</h2>");
    worker("Select * FROM pracownicy where zarobki>10 and (dzial=1 or dzial=3)");
    ?>
    </div>
</div>
    
</body>
</html>
