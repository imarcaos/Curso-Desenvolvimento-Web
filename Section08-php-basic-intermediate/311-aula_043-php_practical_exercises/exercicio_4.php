<?php

/* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
    */

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
$selected = array_search("maria", $nomes);
$css = ''; //teacher
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>

<body>

    <?php foreach ($nomes as $key => $value) : ?>
        <?php if ($key < $selected) : ?>
            <p><?= $value ?></p>
        <?php else : ?>
            <p class="vermelho"><?= $value ?></p>
        <?php endif; ?>
    <?php endforeach; ?>


    <!-- // teacher's code-->
    </br>
    <h2>Teacher's Coder</h2>
    <!--enquanto o nome não for "maria" o nosso css está em branco, e partir dela ele imprimi a vermelho os nomes seguintes -->
    <?php foreach ($nomes as $nome) : ?>
        <?php if ($nome == 'maria') $css = 'vermelho' ?>
        <h3 class="<?= $css ?>"><?= $nome ?></h3>
    <?php endforeach; ?>

</body>

</html>