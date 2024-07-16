<?php

/* 
Este script vai criar um conjunto de pastas de acordo com os argumentos
que lhe vão ser passados. 
O primeiro argumento será do tipo inteiro e vamos limitar o máximo 12
O segundo é uma string que será usada para dar nome à pasta.

Exemplo: script.php 5 teste

Vai criar as pastas

teste_1
teste_2
teste_3
teste_4
teste_5

E dentro de cada uma delas vai criar um ficheiro cujo conteúdo é o nome da 
própria pasta e a data e hora de criação.
*/

// primeiro vai verificar se os argumentos existem e são válidos
if ($argc != 3 || !is_numeric($argv[1]) || !is_string($argv[2])) {
    die('Argumentos inválidos: usage - script.php [1-12] [nome inicial da pasta]');
}

// recebe os argumentos e faz algum tratamento
$total_pastas = $argv[1];
if ($total_pastas < 1) {
    $total_pastas = 1;
} else if ($total_pastas > 12) {
    $total_pastas = 12;
}

$nome_pasta = preg_replace("/\s/", "_", trim($argv[2]));

for ($i = 1; $i <= $total_pastas; $i++) {
    $pasta = $nome_pasta . "_" . $i;
    if (!file_exists($pasta)) {
        mkdir($pasta);
        file_put_contents($pasta . '/notes.txt', "Esta é a pasta $pasta e foi criada em " . date('d-m-Y H:i:s'));
    }
}

echo 'Terminado';
