<!--SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.-->



<?php

function randomNum($min, $max, $len)
{
    $numbers = [];
    while (count($numbers) < $len) {
        $random = rand($min, $max);

        if (!in_array($random, $numbers)) {
            $numbers[] = $random;
        }
    }
    return ($numbers);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
    <?php foreach (randomNum(1, 50, 15) as $number) : ?>

        <ul>
            <li><?= $number ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>