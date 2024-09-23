<?php

$valor = $argv[1];

if(is_numeric($valor) && isset($valor)) {
    for($i=1; $i<=10; $i++) {
        echo $valor .' X '. $i .' = '. $valor*$i . PHP_EOL;
    }
}
else {
    echo 'ERRO! Parâmetro inválido' . PHP_EOL;
}    
