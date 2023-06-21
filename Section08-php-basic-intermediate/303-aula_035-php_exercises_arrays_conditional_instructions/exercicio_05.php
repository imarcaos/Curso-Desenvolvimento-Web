<?php

/*
        Uma empresa tem várias lojas, cada uma com um endereço de email.
        A variável $cidade indica que dados de email deverão ser apresentados.
        Constrói a lógica condicional e de apresentação do email correspondente
        quando é alterado o valor da cidade escolhida.
    */

$lojas = [
    'lisboa' => 'lisboa@gmail.com',
    'porto' => 'porto@gmail.com',
    'coimbra' => 'coimbra@gmail.com'
];

$cidade = 'coimbra';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>

<body>

    <?php if (key_exists($cidade, $lojas)) : ?>
        <h3><!-- nome da cidade (se existe) --><?= $cidade ?> </h3>
        <p><!-- email da loja da cidade (se existe) --><?= $lojas[$cidade] ?> </p>

    <?php else : ?>
        <!-- quando não existe cidade na coleção das $lojas -->
        <p>Não existe nenhuma loja na cidade indicada.</p>

    <?php endif; ?>

</body>

</html>