<?php

$file = fopen('dados.txt', 'w');

$randNum = rand(2000, 3000);

for($i = 0; $i < $randNum; $i++) {
    if($i != $randNum-1) {
        fputs($file, uniqid() . PHP_EOL);
    } else {
        fputs($file, uniqid());
    }
}

fclose($file);