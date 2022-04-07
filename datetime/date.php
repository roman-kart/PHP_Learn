<?php
    $title = "Работа с датами";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$title?></h1>
    <p>
        Для работы с датами в PHP используется функция date()
    </p>
    <h3>Возможности функции date():</h3>
    <ul>
        <li>
            date('l') = <?=date("l")?>
        </li>
        <li>
            date('l jS \of F Y h:i:s A') = <?=date("l jS \of F Y h:i:s A")?>
        </li>
        <li>
            date('h:i:s') = <?=date("h:i")?>
        </li>
        <li>
            date("l", mktime(0, 0, 0, 7, 1, 2000)) = <?="July 1, 2000 is on a ".date("l", mktime(0,0,0,7,1,2000))?>
        </li>
        <li>
            date(DATE_RFC822) = <?=date(DATE_RFC822)?>
        </li>
        <li>
            date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)) = <?=date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))?>
        </li>
        <li>
            date("\m\o\\n\\t\h: l") = <?=date("\m\o\\n\\t\h: l")?>
        </li>
    </ul>

    <h3>Совместное использования date() и mktime():</h3>
    <p>
        <?php
            $yesterday = mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
            $today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
            $tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
        ?>
        <h4>Recent dates: </h4>
        <ul>
            <li>
                yesterday: <?=date("d:m:Y", $yesterday)?>
            </li>
            <li>
                today: <?=date("d:m:Y", $today)?>
            </li>
            <li>
                tomorrow: <?=date("d:m:Y", $tomorrow)?>
            </li>
        </ul>
    </p>
</body>
</html>