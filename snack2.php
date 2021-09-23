<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        'name' => 'Michau',
        'lastname' => 'Wadowski',
        'grades' => [10, 4, 6]
    ],
    [
        'name' => 'Marco',
        'lastname' => 'Lanci',
        'grades' => [1, 3, 8]
    ],
    [
        'name' => 'Noema',
        'lastname' => 'Wadowski',
        'grades' => [10, 9, 7]
    ],
    [
        'name' => 'Micci',
        'lastname' => 'Wado',
        'grades' => [8, 4, 4]
    ]
];


function get_media($voti)
{
    $sum = array_sum($voti);
    $media = $sum / count($voti);
    return $media;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>

<body>
    <?php foreach ($students as $student) : ?>
        <section>
            <ul>
                <li><?= $student['name'] ?></li>
                <li><?= $student['lastname'] ?></li>
                <li><?= round(get_media($student['grades'])) ?></li>
            </ul>

        </section>
    <?php endforeach ?>
</body>

</html>