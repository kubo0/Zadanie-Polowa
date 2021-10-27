<?php
    if(!empty($_POST["wart_min"] && $_POST["wart_max"] && $_POST["informacja"]))
    {
        $baza = new mysqli('localhost', 'root', '', 'egzamin 4');
        
        $stmt = $baza->prepare("INSERT INTO `bmi`(`id`, `wart_min`, `wart_max`, `informacja`) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param("iis", $wart_min, $wart_max, $informacja);

        $wart_min = $_REQUEST['wart_min'];
        $wart_max = $_REQUEST['wart_max'];
        $informacja = $_REQUEST['informacja'];
        
        $stmt->execute();
    }
    $stmt->close();
    $baza->close();

?>