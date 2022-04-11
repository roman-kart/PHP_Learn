<?php
    const CURRENT_PAGE_NAME = 'Функции - задачи';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../source/css/bootstrap.min.css" rel="stylesheet"/>
    <title><?=CURRENT_PAGE_NAME?></title>
</head>
<body>
    <h1><?=CURRENT_PAGE_NAME?></h1>
    <div>
        <h2>Задание 1</h2>
        <?php
            # проверка на существование функции
            $func = 'function_exists';
            echo '<p>';
            echo 'Функция ' . $func . ' существует? ' . (function_exists($func) ? 'Да.' : 'Нет.');
            echo '</p>';

            # проверка на существование функции
            $func = 'MyFunctions::NotExistingFunction';
            echo '<p>';
            echo 'Функция ' . $func . ' существует? ' . (function_exists($func) ? 'Да.' : 'Нет.');
            echo '</p>';
        ?>
    </div>
    <div>
        <h2>Задание 2</h2>
        <?php
            function odd($value) : bool
            {
                return $value % 2 != 0;
            }
        ?>
        <p>
            Is 2 odd? Answer: <?=odd(2) ? 'Yes' : 'No'?>
        </p>
        <p>
            Is 3 odd? Answer: <?=odd(3) ? 'Yes' : 'No'?>
        </p>
    </div>
    <div>
        <h2>Задание 3</h2>
        <?php
            function sum(int ...$args) : int
            {
                $result = 0;
                foreach ($args as $value) {
                    $result += $value;
                }
                return $result;
            }
        ?>
        <p>
            Result: <?=sum(10, 78, 90, 123)?>
        </p>
    </div>
</body>
</html>