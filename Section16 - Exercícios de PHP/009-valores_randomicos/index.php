<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 009</title>
</head>
<body>
    <?php
    for($i=0; $i<20; $i++) {
        $numRand = rand(1,100);
        echo "<b> $numRand x 3 = " . $numRand*3 . "</b><br>";        
    }
    ?>
</body>
</html>