<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    <div>
        <h2>Задание 1 - чтение и запись файлов</h2>
        <div>
            <?php
                $dateTime = date(DATE_RSS);
                $data = "Current date and time: {$dateTime}";
                file_put_contents(
                    "./myFile.txt",
                    $data . PHP_EOL,
                    LOCK_EX | FILE_APPEND
                );
            ?>
            <h3>Текущее содержимое файла myFile.txt:</h3>
            <p>
                <?=file_get_contents("./myFile.txt")?>
            </p>
        </div>
    </div>
    <div>
        <h2>Список расширений и констант</h2>
        <div>
            <h3>Расширения: </h3>
            <p>
                <?=`php -m`?>
            </p>
        </div>
        <div>
            <h3>Константы: </h3>
            <p>
                <?php
                    $consts = get_defined_constants();

                    echo "<ul>";
                    foreach ($consts as $const) {
                        echo "<li>{$const}</li>";
                    }
                    echo "</ul>";
                ?>
            </p>
        </div>
    </div>
</body>
</html>