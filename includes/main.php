<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Родительская страница</title>
</head>
<body>
    <?php
        $i = 10;
        echo 'i = ', $i;
        require 'module.php';
        $i = $i + 1;
        echo 'i after increment = ', $i;
    ?>
</body>
</html>