<?php
    $valores = [];
    while(count($valores) < 20) {
        $valor = rand(1,100);
        if(!in_array($valor, $valores)) {
            $valores[] = $valor;
        }
    }
    sort($valores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 010</title>
</head>
<body>
    <?php foreach($valores as $valor) : ?>
        <b><?= $valor ?></b><br>
    <?php endforeach; ?>
</body>
</html>