<?php
    
    $timeStart = microtime(true);
    for($i = 0; $i <= 30000; $i++) {
        echo $i . PHP_EOL;
    }
    $timeEnd = microtime(true);
    $time = $timeEnd - $timeStart;
    $time = round($time, 3, PHP_ROUND_HALF_UP);

    echo 'Tarefa concluída em $time segundos.' . PHP_EOL;
