<?php
    $works = [
        'Programador',
        'Designer',
        'Engenheiro',
        'Médico',
        'Advogado',
        'Professor',
        'Bombeiro',
        'Policial',
        'Piloto',
        'Cientista'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 013</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Profissão</th>
                <th>Em maiúsculas</th>
                <th>Em minúsculas</th>
                <th>Primeiras 4 letras</th>
                <th>Total caracteres</th>
            </tr>
        </thead>  
        <tbody>
            <?php foreach($works as $work) : ?> 
                <tr>
                    <td><?= $work ?></td>
                    <td><?= mb_strtoupper($work) ?></td> <?php //mb_ (Multibyte) antes da função ajuda na leitura dos nosso caracteres especiais ?>
                    <td><?= mb_strtolower($work) ?></td>
                    <td><?= substr($work, 0 , 4) ?></td>
                    <td><?= strlen($work) ?></td>
                </tr>
            <?php endforeach; ?>           
        </tbody>  
    </table>
</body>
</html>