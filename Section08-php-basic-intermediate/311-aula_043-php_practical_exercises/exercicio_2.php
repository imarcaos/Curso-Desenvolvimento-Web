<?php

/* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */

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
    <?php
    $result = [];
    for ($i = 1; $i <= 10; $i++) {
        array_push($result, (327 * $i));
        //$result[] = 327 * $i;
    }

    ?>

    <?php foreach ($result as $result) : ?>
        <h3><?= $result ?></h3>
    <?php endforeach; ?>


</body>

</html>