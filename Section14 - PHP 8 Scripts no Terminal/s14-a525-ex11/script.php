<?php

require_once('vendor/autoload.php');
require_once('inc/config.php');
require_once('inc/Database.php');

use bng\System\Database;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// process start
logger('Início do processo', 'info');

// check if the data file exists
if (!file_exists('dados_clientes.csv')) {
    logger('Não foi possível encontrar o ficheiro dados_clientes.csv', 'error');
    die();
}

// validates the file header
$file = fopen("dados_clientes.csv", 'r');
$headers = fgetcsv($file, 0, ';');
if (implode(',', $headers) != HEADERS) {
    logger('O ficheiro dados_clientes.csv não contém o cabeçalho correto.', 'error');
    die();
}
fclose($file);

// create conditions to start importing data
$database = new Database([
    'host' => MYSQL_HOST,
    'database' => MYSQL_DATABASE,
    'username' => MYSQL_USER,
    'password' => MYSQL_PASS
]);

$report = [
    'total_rows_in_file' => 0,
    'total_rows_imported' => 0
];

$file = fopen("dados_clientes.csv", 'r');
$header = fgetcsv($file, 0, ';');
$index = 1;
while (!feof($file)) {

    try {
        $row = fgetcsv($file, 0, ';');
        if(empty($row)){
            continue;
        }
        $birthdate = DateTime::createFromFormat('d-m-Y', $row[1]);
        $params = [
            ':name' => $row[0],
            ':birthdate' => $birthdate->format('Y-m-d'),
            ':email' => $row[2],
            ':phone' => $row[3]
        ];
        $result = $database->execute_non_query(
            "INSERT INTO clientes VALUES(" .
                "0, :name, :birthdate, :email, :phone, NOW(), NOW(), NULL)",
            $params
        );
        $report['total_rows_imported']++;
    } catch (\Throwable $th) {

        logger("Aconteceu um erro com a importação da linha n.º $index", 'error');
    }

    $report['total_rows_in_file']++;
    $index++;
}
fclose($file);

// report on log
logger('Report: ' . json_encode($report), 'info');

// process end
logger('Fim do processo', 'info');

function logger($message, $level)
{
    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler(LOGS_PATH, Level::Debug));

    // $level must be a valid level (debug, info, notice, warning, error, critical, alert, emergency)
    $log->$level($message);
}
