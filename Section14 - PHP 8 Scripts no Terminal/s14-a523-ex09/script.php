<?php 

/*
Vamos receber dados provenientes do STDIN (standard input)
Por exemplo, vamos imaginar que um determinado comando do terminal
vai pegar algumas linhas de um texto e pretendemos depois que essas
linhas sejam tratadas pelo PHP.
*/

$dados = file_get_contents('php://stdin', 'r');
if(empty($dados)){
    die('Não há dados para apresentar.');
}

// vamos pegar a informação recebida (várias linhas de texto)
// e vamos transformar num array
$colecao = explode(PHP_EOL, $dados);

// agora vamos apresentar cada um dos valores de uma outra forma.
foreach($colecao as $texto){
    if(!empty($texto)){
        echo 'O texto recebido foi: ' . $texto . PHP_EOL;
    }
}

echo 'TERMINADO';