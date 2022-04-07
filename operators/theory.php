<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Операторы</title>
</head>
<body>
    <h1>Оператора в PHP</h1>
    <div>
        <h2>Объединение строк. Оператор "."</h2>
        <p>
            Для объединения строк используется оператор ".".
        </p>
        <p>
            <em>
                Если использовать оператор "+", 
                то интерпретатор попытается извлечь из строк числовое значение.
                Если у него не получится это сделать - строка будет преобразована в 0.
            </em>
        </p>
        <div>
            <h3>Пример</h3>
            <pre>
                <code>
$number = 123;
$str1 = 'Сегодня' . $number . 'участников.';
$str2 = "Сегодня {$number} участников.";
echo "<p>\$str1 = {$str1}</p>";
echo "<p>\$str2 = {$str2}</p>";
                </code>
            </pre>
            <?php
                $number = 123;
                $str1 = 'Сегодня ' . $number . ' участников.';
                $str2 = "Сегодня {$number} участников.";
                echo "<p>\$str1 = {$str1}</p>";
                echo "<p>\$str2 = {$str2}</p>";
            ?>
        </div>
    </div>
    <div>
        <h2>Сокращенная конкатенация строк .=</h2>
        <p>
            <pre>
                <code>
$userName = "Alex";
$str1 = "Hello ";
$str1 .= $userName;
$str1 .= ", nice to meet you!";
echo "&lt;p&gt;\$str1 = {$str1}&lt;/p&gt;";
                </code>
            </pre>
            <?php
                $userName = "Alex";
                $str1 = "Hello, ";
                $str1 .= $userName;
                $str1 .= ", nice to meet you!";
                echo "<p>\$str1 = {$str1}</p>";
            ?>
        </p>
    </div>
    <div>
        <h2>Арифметические операции</h2>
        <?php
            $x1 = 5;
            $x2 = 7;
        ?>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <td>Оператор</td>
                        <td>Описание</td>
                        <td>Дейсвтвие(x1 = 5, x2 = 7)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>+</td>
                        <td>Сложение</td>
                        <td><?=$x1 + $x2?></td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>Умножение</td>
                        <td><?=$x1 * $x2?></td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>Вычитание</td>
                        <td><?=$x1 - $x2?></td>
                    </tr>
                    <tr>
                        <td>/</td>
                        <td>Деление</td>
                        <td><?=$x1 / $x2?></td>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td>Деление по модулю</td>
                        <td><?=$x1 % $x2?></td>
                    </tr>
                    <tr>
                        <td>**</td>
                        <td>Возведение в степень</td>
                        <td><?=$x1 ** $x2?></td>
                    </tr>
                    <tr>
                        <td>++</td>
                        <td>Инкремент</td>
                        <td><?=++$x1?></td>
                    </tr>
                    <tr>
                        <td>--</td>
                        <td>Декремент</td>
                        <td><?=--$x1?></td>
                    </tr>
                </tbody>
            </table>
            <p>
                Если при делении получается дробное число 
                - результат приводится к вещественному числу.
                <em>
                    Регулировать точность вещественных чисел можно при помощи
                    параметра precision в файле php.ini.
                </em>
            </p>
            <p>
                <h3>Пример:</h3>
                <h4>Код: </h4>
                <pre>
                    <code>
echo 5 / 3;    
                    </code>
                </pre>
                <h4>Вывод: </h4>
                <?php
                    echo 5 / 3;
                ?>
            </p>
        </div>
        <div>
            <h2>Побитовые операции</h2>
            <div>
                <?php
                    $allMask = 0 | 1 | 2 | 4 | 8;
                    echo "<p>\$allMask = $allMask</p>";
                    echo "<p>\$allMask & 2 = ".($allMask & 2)."</p>";
                    echo "<p>" . "(2 | 4 | 8) & 1 = " . ((2 | 4 | 8) & 1) . "</p>"; 
                ?>
            </div>
        </div>
        <div>
            <h2>Опеараторы сравнения</h2>
            <p>
                45 <=> 23 = <?=45<=>23?>
            </p>
            <p>
                12 <=> 23 = <?=12<=>23?>
            </p>
            <p>
                45 <=> 45 = <?=45<=>45?>
            </p>
        </div>
    </div>
</body>
</html>