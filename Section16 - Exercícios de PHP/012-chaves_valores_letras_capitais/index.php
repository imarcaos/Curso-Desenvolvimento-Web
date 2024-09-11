<?php
    $worker = [
        'nome' => 'João',
        'idade' => 20,
        'altura' => 1.80,
        'peso' => 80,
        'profissão' => 'Programador'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 012</title>
</head>
<body>
    <?php
    foreach ($worker as $x => $y) {
        echo ucfirst($x) . " = " . ucfirst($y) . "<br>";
    }
    ?>
    
</body>
</html>