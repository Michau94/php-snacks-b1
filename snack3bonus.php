<!-- BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$status = [];

// CONTROL DATA INPUT

if (empty($name) || empty($mail) || empty($age)) {
    $status[] = 'Data Incomplete';
} else {

    // CONTROL DATA ONLY IF FILLED

    if (strlen($name) < 3) {
        $status[] = 'Errore Nome';
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $status[] = 'Errore Mail';
    }

    if (!is_numeric($age)) {
        $status[] = 'Errore età';
    }

    if (count($status) == 0) {
        $status[] = 'accesso Consentito';
    }
}


//  ERROR OUTPUT
// foreach ($status as $err) {
//     echo $err;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>

        <?php foreach ($status as $stat) echo $stat ?>

    </h1>

</body>

</html>