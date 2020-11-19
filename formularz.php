<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="con">
        <div class="nav">
            <a class="link z" href="Index.php">Wróć do strony głównej</a>
        </div>
        <div class="item a">
            <h1>Dodaj Pracownika :D</h1>
        <form action="strona.php" method="POST">
            <input type="text" name="imie" placeholder="Imie">
            <br><input type="text" name="dzial" placeholder="Dzial">
            <br><input type="text" name="zarobki" placeholder="Zarobki">
            <br><input type="date" name="data_">
            <input type="submit" value="Dodaj">
            </form>
        </div>
        <div class="item y">
            <h1>Usuń Pracownika</h1>
        <?php
                require_once("connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                    echo("<th class=usuń>Usuń</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("<td><form action=delete.php method=POST>");
                            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
                            echo("<input type=submit value=X>");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
    </div>
</body>
</html>