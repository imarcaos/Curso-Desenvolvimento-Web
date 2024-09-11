<?php
    // $restri = [10, 20, 30, 40, 50, 60, 70, 80, 90]; // método 1
    $valores = [];
    // método 1
    // while(count($valores) < 20) {
    //     $valor = rand(1,100);
    //     if(!in_array($valor, $valores)) {
    //         if(!in_array($valor, $restri)) {
    //             $valores[] = $valor;
    //         }
    //     }
    // }
    // método 2 (outra forma)
    while(count($valores) < 20) {
        $valor = rand(1,100);
        if(!in_array($valor, $valores) && $valor % 10 != 0) {
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
    <title>PHP - Exercício 011</title>
</head>
<body>
    <?php foreach($valores as $valor) : ?>
        <b><?= $valor ?></b><br>
    <?php endforeach; ?>
</body>
</html>