<?php

// este código permite gerar dados aleatórios para construção do ficheiro data.txt
// $chars = "ABCDEFGH0123456789ABCDEFGH0123456789ABCDEFGH0123456789";
// $file = fopen('data.txt', 'w');
// for($i=0; $i <= 10000; $i++){
//     fputs($file, (substr(str_shuffle($chars), 0, 20)) . PHP_EOL) ;
// }   
// fclose($file);
// die('terminado)

/*
Este script efetua uma operação muito simples:
A partir do ficheiro data.txt, que contém várias linhas com valores aleatórios,
vamos separar para um novo ficheiro, apenas os registos que começam com a letra A.
Queremos saber se o processo foi executado com sucesso, quando começou, quando terminou e quantos
registos foram ignorados e quanto foram passados para o novo ficheiro. 

Vamos cria um registo de logs, cada um por cada processo.
Vamos usar o Monolog para esse efeito.

composer require monolog/monolog

*/

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once 'vendor/autoload.php';

$log_file = 'logs/log_' . time() . '.log';

// --------------------------------------------------
// start process
// --------------------------------------------------

logger('Processo iniciado.', 'info');

// check if the data.txt file exists
if (!file_exists('data.txt')) {
    logger('Não foi encontrado o ficheiro data.txt.', 'error');
    die();
}

// sets the initial report about the process
$report = [
    'total_rows' => 0,
    'total_accepted' => 0,
    'total_ignored' => 0
];


// store final report in log file
try {
    $file_input = fopen('data.txt', 'r');
    $file_output = fopen('new_file_' . time() . '.txt', 'w');
    while (!feof($file_input)) {
        $line = fgets($file_input);
        $report['total_rows']++;
        if (preg_match("/^A/", $line)) {
            $report['total_accepted']++;
            fputs($file_output, $line);
        } else {
            $report['total_ignored']++;
        }
    }
    fclose($file_output);
    fclose($file_input);

    // store report in the log file
    logger('Report final: ' . json_encode($report), 'info');

} catch (\Throwable $th) {
    logger('Aconteceu um erro no tratamento dos dados.', 'error');
   die();
}

logger('Processo terminado.', 'info');

// --------------------------------------------------
// end process
// --------------------------------------------------

function logger($message, $level)
{
    global $log_file;

    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler($log_file, Level::Debug));

    // $level must be a valid level (debug, info, notice, warning, error, critical, alert, emergency)
    $log->$level($message);
}
