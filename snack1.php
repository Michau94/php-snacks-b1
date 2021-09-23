<!--SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.-->



<?php

function randomNum()
{

    $numbers = range(1, 50);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, 15);

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
    <?php foreach (randomNum() as $number) : ?>

        <ul>
            <li><?= $number ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>