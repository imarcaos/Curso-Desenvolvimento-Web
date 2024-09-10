
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 008</title>
</head>
<body>
    <?php for($i=2; $i <= 6; $i++): ?>
        <?php for($j=1; $j <= 10; $j++): ?>
            <b><?= "$i x $j = " . ($i*$j) ?></b><br>            
        <?php endfor; ?>
        <?php
            //if($i < 6) echo "<hr>";
        ?>
        <?= $i < 6 ?  "<hr>" : "" ?>
    <?php endfor; ?>
</body>
</html>