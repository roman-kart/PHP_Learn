<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задания</title>
</head>
<body>
    <h1>Задания</h1>
    <div>
        <h2>Задание 1 - возведение числа в степень без ** и pow</h2>
        <p>
            <?php
                $dig = 8;
                $exp = 12;
                $res = $dig;
                for ($i=1; $i < $exp; $i++) { 
                    $res *= $dig;
                }
            ?>
            <?=$dig?> * <?=$exp?> = <?=$res?>
        </p>
    </div>
</body>
</html>