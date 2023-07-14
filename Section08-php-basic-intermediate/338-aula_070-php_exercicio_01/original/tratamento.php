<?php

// lógica de tratamento do formulário

/* 
// my code (with errors)
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

$erros = [];
$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];


if (empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])) {
    $erros[] = 'O campo valor deve ser preenchido obrigatóriamente';
} elseif (!is_numeric($valor1) || !is_numeric($valor2)) {
    $erros[] = 'Tem que digitar um valor numérico';
} elseif ($valor1 <= 0 || $valor2 <= 0) {
    $erros[] = 'Tem que digitar um valor numérico positivo';
}

// apresentar erros
if (!empty($erros)) {
    echo '<h4>ERROS!</h4>';
    echo '<ul>';
    foreach ($erros as $erro) {
        echo "<li>$erro</li>";
    }
    echo '</ul>';
} else {
    echo '<pre>';
    print_r("O resultado da multiplicação de $valor1 x $valor2 é: $valor*$valor2");
}
*/

// teacher's code

session_start();

// verifica se aconteceu algum post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// verificar se os valores existem
if (empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])) {
    $_SESSION['erro'] = "Os dois valores são de preenchimento obrigatório.";
    header("Location: index.php");
    return;
}

// verifica se os campos são numéricos e positivos
$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];
if (!is_numeric($valor1) || !is_numeric($valor2) || $valor1 < 1 || $valor2 < 1) {
    $_SESSION['erro'] = "Os dois valores tem que ser numéricos e positivos.";
    header("Location: index.php");
    return;
}

// resultado
$resultado = $valor1 * $valor2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Resultado:</h1>
    <h3><?= "$valor1 x $valor2 = $resultado" ?></h3>
</body>

</html>