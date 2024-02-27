<?php

$user_paragraph = $_POST['paragraph'];
$user_paragraph_length = strlen($user_paragraph);


$user_bedwords = $_POST['bedwords'];

$paragraph_censured = str_replace($user_bedwords, '***', $user_paragraph);
$paragraph_censured_length = strlen($paragraph_censured);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>La tua frase</h3>
    <?= $user_paragraph ?>
    <p>lunghezza frase: <?= $user_paragraph_length ?></p>
    

    <h3>La tua frase censurata</h3>
    <?= $paragraph_censured ?>
    <p>lunghezza frase censurata: <?= $paragraph_censured_length ?></p>

</body>
</html>