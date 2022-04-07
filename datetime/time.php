<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с временем</title>
</head>
<body>
    <h1>Примеры использования time(): </h1>
    <?php
        $nextWeek = time() + (7 * 24 * 60 * 60);
    ?>

    <p>
        Now: <?=date("Y-m-d")?>
    </p>
    <p>
        Next week = <?=date("Y-m-d", $nextWeek)?>
    </p>
    <p>
        Next week = <?=date("Y-m-d", strtotime('+1 week'))?>
    </p>
</body>
</html>