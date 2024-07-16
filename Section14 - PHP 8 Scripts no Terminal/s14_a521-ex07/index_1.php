<?php

$valor1 = $argv[1];
$valor2 = $argv[2];

$file = fopen('output.txt', 'w');

for($i = 1; $i<=10; $i++){
    $produto = $valor1 * $valor2;
    fputs($file, "$valor1 x $valor2 = $produto" . PHP_EOL);
    $valor1 = $produto;
}

fclose($file);
echo 'FIM';