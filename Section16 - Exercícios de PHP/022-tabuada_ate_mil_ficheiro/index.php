<?php

$valor = $argv[1];
$file = fopen("tabuada_$valor.txt", 'w');

if (isset($valor) && is_numeric($valor)) {
    for ($i = 1; $i <= 1000; $i++) {
        $resultado = $valor * $i;
        fwrite($file, "$valor X $i = $resultado" . PHP_EOL);
        if ($i % 100 == 0) {
            fwrite($file, str_repeat('-', 10) . PHP_EOL);
        }
    }
} else {
    echo 'ERRO! Parâmetro inválido' . PHP_EOL;
}
fclose($file);
