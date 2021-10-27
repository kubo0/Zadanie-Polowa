<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie: Szybsza połowa wygrywa</title>
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
    <br>
    <form action="request.php" method="post">
        <label for="wartość_min">Wartość minimalna: </label>
        <input type="text" name="wart_min"><br>
        <label for="wartość_max">Wartość maksymalna: </label>
        <input type="text" name="wart_max"><br>
        <label for="informacja">Informacja: </label>
        <input type="text" name="informacja"><br>
        <button type="submit">Wstaw do bazy</button>
    </form>
</body>
</html>