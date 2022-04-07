<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Константы</title>
</head>
<body>
    <h1>Константы</h1>
    <div>
        <h2>Объявление констант</h2>
        <p>
            Константы объявляются при помощи функции define: 
            <pre>
                <code>
define(
    string $Name, 
    mixed $Value 
    [, bool case_insensitive]
)
                </code>
            </pre>
        </p>
        <p>
            Пример:
            <pre>
                <code>
define("MY_CONSTANT", 123.12, true);
echo MY_CONSTANT;
                </code>
            </pre>
            <?php
                define("MY_CONSTANT", 123.12, true);
                echo MY_CONSTANT;
            ?>
        </p>
        <p>
            Так как функция define() возвращает 
            либо true <em>(если операция завершилась успешно)</em>,
            либо false <em>(если операция завершилась неуспешно, например, такая константа уже существует)</em>
        </p>
        <p>
            <pre>
                <code>
if (define("VALUE", 'Hi')) {
    echo '&lt;p&gt;Константа успешно создана!&lt;/p&gt;';
}
if (!define("VALUE", 123)) {
    echo '&lt;p&gt;Такая константа уже существует!&lt;/p&gt;';
}
                </code>
            </pre>
            <?php
                if (define("VALUE", 'Hi')) {
                    echo '<p>Константа успешно создана!</p>';
                }
                if (!define("VALUE", 123)) {
                    echo '<p>Такая константа уже существует!</p>';
                }
            ?>
        </p>
    </div>
    <div>
        <h2>Проверка существования константы</h2>
        <p>
            Проверить, существует ли константа с таким именем можно при помощи
            функции difined(string $name).
        </p>
        <p>
            <h4>Пример</h4>
            <div>
                <h5>Код</h5>
                <pre>
                    <code>
define("SOMETHING", 123, false);
if (defined("SOMETHING")) {
    echo 'Константа с именем SOMETHING существует!';
}
if (!defined("VALL")) {
    echo 'Константа с именем VALL не сущетсвует!';
}
                    </code>
                </pre>
            </div>
            <div>
                <h5>Реузльтат</h5>
                <p>
                    <?php
                        define("SOMETHING", 123, false);
                        if (defined("SOMETHING")) {
                            echo '<p>Константа с именем SOMETHING существует!</p>';
                        }
                        if (!defined("VALL")) {
                            echo '<p>Константа с именем VALL не сущетсвует!</p>';
                        }
                    ?>
                </p>
            </div> 
        </p>
    </div>
    <div>
        <h2>Предопределенные константы</h2>
        <table border="1">
            <thead>
                <tr>
                    <td>Константа</td>
                    <td>Описание</td>
                    <td>Результат выполнения</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>__LINE__</td>
                    <td>Текущая строка в файле</td>
                    <td><?=__LINE__?></td>
                </tr>
                <tr>
                    <td>__FILE__</td>
                    <td>Полный путь и имя текущего файла</td>
                    <td><?=__FILE__?></td>
                </tr>
                <tr>
                    <td>__FUNCTION__</td>
                    <td>Имя функции</td>
                    <td><?=__FUNCTION__?></td>
                </tr>
                <tr>
                    <td>__CLASS__</td>
                    <td>Имя класса</td>
                    <td><?=__CLASS__?></td>
                </tr>
                <tr>
                    <td>__METHOD__</td>
                    <td>Имя метода класса</td>
                    <td><?=__METHOD__?></td>
                </tr>
                <tr>
                    <td>__DIR__</td>
                    <td>Текущий каталог, в котором расположен скрипт</td>
                    <td><?=__DIR__?></td>
                </tr>
                <tr>
                    <td>PHP_VERSION</td>
                    <td>Версия языка PHP</td>
                    <td><?=PHP_VERSION?></td>
                </tr>
                <tr>
                    <td>PHP_EOL</td>
                    <td>Символ конца строки</td>
                    <td><?=PHP_EOL?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Объявление констант в классах</h2>
        <p>
            Для определения констант в классах необходимо использовать модификатор const.
        </p>
        <div>
            <h3>Пример:</h3>

            <?php
                class WithConst{
                    public const MY_CONST = "AAABBB";
                }
                $constVal = WithConst::MY_CONST;
                echo "<p>Const val = {$constVal}</p>";
            ?>
        </div>
    </div>
</body>
</html>