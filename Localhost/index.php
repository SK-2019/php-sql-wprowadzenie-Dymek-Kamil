<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
            <input type="text" name="imie" placeholder="Imie">
            <input type="text" name="dzial" placeholder="Dzial">
            <br><input type="text" name="zarobki" placeholder="Zarobki">
            <input type="date" name="data_">
            <br><input type="submit" value="Dodaj">
    </form>
    <div class="tabelka">
    <?php
    require_once("connect.php");
    $result=$conn->query("Select * From pracownicy");
    echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");}
    echo("</table>");
    ?>
    </div>
</body>
</html>