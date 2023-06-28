<?php

/* 
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
    */

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
$ignore = 4;

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

    // for ($i = 0; $i < count($nomes); $i++) {
    //     if ($i == $ignore) continue;
    //     echo "$nomes[$i]<br>";
    // }
    ?>

    <?php foreach ($nomes as $key => $value) : ?>
        <?php if ($key == $ignore) continue; ?>
        <p><?= $value ?></p>
    <?php endforeach; ?>



</body>

</html>