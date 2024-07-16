<?php

// verifica se os argumentos estão presentes
if(empty($argv) || $argc != 3){
    die("ERROR!\nUsage: php index_2.php int1 int2" . PHP_EOL);
}

// check if both values can be treated as integers
if((int)$argv[1] == 0 || (int)$argv[2] == 0){
    die("ERROR!\nBoth arguments must be integers" . PHP_EOL); 
}

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