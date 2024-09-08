<?php
    $frutos = [
        'Maçã',
        'Laranja',
        'Banana',
        'Pêra',
        'Mamão',
        'Melancia',
        'Melão',
        'Abacaxi',
        'Limão',
        'Carambola'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 005</title>
</head>
<body>
    <ul>
        <?php sort($frutos); ?>
        <?php foreach ($frutos as $fruta) : ?>
            <li> <?= $fruta ?> </li>
        <?php endforeach; ?>
    </ul>        
</body>
</html>