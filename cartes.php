<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Création du paquet initial
    $tableauSuite = ["\u{2660}", "\u{2665}", "\u{2666}", "\u{2663}"];
    $tableauNombres = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"]; 

    for($j = 0; $j < count($tableauSuite); $j++)
    {
        for($i = 0; $i < count($tableauNombres); $i++)
        {
            $cartes[] = $tableauNombres[$i].$tableauSuite[$j];
        }
    }

// Coupage du paquet
    for($i = 0; $i < count($cartes)/2; $i++)
        $paquet1[] = $cartes[$i];

    for($i = count($cartes)/2; $i < count($cartes); $i++)
        $paquet2[] = $cartes[$i];

// Nouveau paquet
    $nouvPaquet = array();
    for($i = 0; $i < 26; $i++)
    {
        array_push($nouvPaquet, $paquet1[$i]);
        array_push($nouvPaquet, $paquet2[$i]);
    }

// Affichage en table
    echo "<table>";
    $j = 0;
    for($k = 0; $k < 4; $k++)
    {
        echo "<tr>";
        for($i = $j; $i < ($j + 13); $i++)
            echo"<td>$nouvPaquet[$i]</td>";
        echo "</tr>";
        $j += 13;
    }
echo "</table>";
?>
</body>
</html>
