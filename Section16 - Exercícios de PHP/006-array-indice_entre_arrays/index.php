<?php
    $nomes = [
        'João',
        'Maria',
        'José'
    ];
    $apelidos = [
        'Silva',
        'Teixeira',
        'Oliveira'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 006</title>
</head>
<body>
    <ul>
        <?php 
        for($i=0; $i < sizeof($nomes); $i++ ) {
            echo "<li>$nomes[$i] $apelidos[$i]</li>";
        } 
        ?>
    </ul>
</body>
</html>