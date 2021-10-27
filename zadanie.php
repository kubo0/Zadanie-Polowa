<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie-połowa</title>
</head>
<body>
    <?php
        echo "<table>";
        echo "<tr>";
        echo "<td>id</td>";
        echo "<td>wart_min</td>";
        echo "<td>wart_max</td>";
        echo "<td>infomacja</td>";
        echo "</tr>";
        $baza = new mysqli('localhost', 'root', '', 'egzamin 4');
        $zapytanie = "SELECT * FROM `bmi`";
        $wynik = $baza->query($zapytanie);
        while ($wiersz = $wynik->fetch_assoc())
        {
            $id = $wiersz['id'];
            $wart_min = $wiersz['wart_min'];
            $wart_max = $wiersz['wart_max'];
            $informacja = $wiersz['informacja'];
            //echo $id, $wart_min, $wart_max, $informacja;
            
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$wart_min</td>";
            echo "<td>$wart_max</td>";
            echo "<td>$informacja</td>";
            echo "</tr>";
            
        }
        echo "</table>";

        $baza->close();
    ?>

    <form action="request.php" method="post">
        
    </form>

    <br>
</body>
</html>