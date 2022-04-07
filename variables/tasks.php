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
        <h2>Задание 1 - is_numeric()</h2>
        <p>
            В отличии от is_int() и is_float() 
            функция is_numeric() может распознавать числа, которые находятся в строках.
            <?php
                $arr = array(
                    "dsdf",
                    "123",
                    123,
                    true,
                    234.324,
                    "123sdf",
                    "ewr234",
                    "234 " /* работает начиная с 8.0 */,
                    "9001 ",
                    " 9001",
                    "42 ",
                    " 42"
                );

                foreach ($arr as $element) {
                    if (is_numeric($element)) {
                        echo var_export($element, true) . " is numeric", "</br>";
                    }
                    else {
                        echo var_export($element, true) . " is NOT numeric", "</br>";
                    }
                }
            ?> 
        </p>
    </div>

    <div>
        <h2>Задание 2 - round()</h2>
        <p>
            round() предназначена для округления числовых значений.
            Может округлять как до знаков после запятой, так и до знаков до запятой.
            Также имеет несколько режимов округления.
        </p>
        <div>
            <h3>Округление до и после запятой:</h3>
            <div>
                <h4>До запятой: </h4>
                <ul>
                    <li>
                        round(255.512, 2) = <?=round(255.512, 2)?>
                    </li>
                    <li>
                        round(355.512, 2) = <?=round(355.512, 2)?>
                    </li>
                </ul>
            </div>
            <div>
                <h4>После запятой: </h4>
                <ul>
                    <li>
                        round(255.512, -2) = <?=round(255.512, -2)?>
                    </li>
                    <li>
                        round(355.512, -2) = <?=round(355.512, -2)?>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h3>Режимы округления:</h3>
            <div>
                <h4>PHP_ROUND_HALF_UP</h4>
                <ul>
                    <li>
                        round(2.5, PHP_ROUND_HALF_UP) = <?=round(2.5, 0, PHP_ROUND_HALF_UP)?>
                    </li>
                    <li>
                        round(1.5, PHP_ROUND_HALF_UP) = <?=round(1.5, 0, PHP_ROUND_HALF_UP)?>
                    </li>
                    <li>
                        round(-1.5, PHP_ROUND_HALF_UP) = <?=round(-1.5, 0, PHP_ROUND_HALF_UP)?>
                    </li>
                    <li>
                        round(-2.5, PHP_ROUND_HALF_UP) = <?=round(-2.5, 0, PHP_ROUND_HALF_UP)?>
                    </li>
                </ul>
            </div>
            <div>
                <h4>PHP_ROUND_HALF_DOWN</h4>
                <ul>
                    <li>
                        round(2.5, PHP_ROUND_HALF_DOWN) = <?=round(2.5, 0, PHP_ROUND_HALF_DOWN)?>
                    </li>
                    <li>
                        round(1.5, PHP_ROUND_HALF_DOWN) = <?=round(1.5, 0, PHP_ROUND_HALF_DOWN)?>
                    </li>
                    <li>
                        round(-1.5, PHP_ROUND_HALF_DOWN) = <?=round(-1.5, 0, PHP_ROUND_HALF_DOWN)?>
                    </li>
                    <li>
                        round(-2.5, PHP_ROUND_HALF_DOWN) = <?=round(-2.5, 0, PHP_ROUND_HALF_DOWN)?>
                    </li>
                </ul>
            </div>
            <div>
                <h4>PHP_ROUND_HALF_EVEN</h4>
                <ul>
                    <li>
                        round(2.5, PHP_ROUND_HALF_EVEN) = <?=round(2.5, 0, PHP_ROUND_HALF_EVEN)?>
                    </li>
                    <li>
                        round(1.5, PHP_ROUND_HALF_EVEN) = <?=round(1.5, 0, PHP_ROUND_HALF_EVEN)?>
                    </li>
                    <li>
                        round(-1.5, PHP_ROUND_HALF_EVEN) = <?=round(-1.5, 0, PHP_ROUND_HALF_EVEN)?>
                    </li>
                    <li>
                        round(-2.5, PHP_ROUND_HALF_EVEN) = <?=round(-2.5, 0, PHP_ROUND_HALF_EVEN)?>
                    </li>
                </ul>
            </div>
            <div>
                <h4>PHP_ROUND_HALF_ODD</h4>
                <ul>
                    <li>
                        round(2.5, PHP_ROUND_HALF_ODD) = <?=round(2.5, 0, PHP_ROUND_HALF_ODD)?>
                    </li>
                    <li>
                        round(1.5, PHP_ROUND_HALF_ODD) = <?=round(1.5, 0, PHP_ROUND_HALF_ODD)?>
                    </li>
                    <li>
                        round(-1.5, PHP_ROUND_HALF_ODD) = <?=round(-1.5, 0, PHP_ROUND_HALF_ODD)?>
                    </li>
                    <li>
                        round(-2.5, PHP_ROUND_HALF_ODD) = <?=round(-2.5, 0, PHP_ROUND_HALF_ODD)?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <h2>Задание 3 - ceil()</h2>
        <p>
            ceil(); - округление дроби в большую сторону
        </p>
        <div>
            <ul>
                <li>
                    ceil(-2.5) = <?=ceil(-2.5)?>
                </li>
                <li>
                    ceil(-1.5) = <?=ceil(-1.5)?>
                </li>
                <li>
                    ceil(1.5) = <?=ceil(1.5)?>
                </li>
                <li>
                    ceil(2.5) = <?=ceil(2.5)?>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <h2>Задание 4 - floor()</h2>
        <p>
            floor(); - округление чисел в меньшую сторону
        </p>
        <div>
            <ul>
                <li>
                    floor(-2.5) = <?=floor(-2.5)?>
                </li>
                <li>
                    floor(-1.5) = <?=floor(-1.5)?>
                </li>
                <li>
                    floor(1.5) = <?=floor(1.5)?>
                </li>
                <li>
                    floor(2.5) = <?=floor(2.5)?>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <h2>Округление числа</h2>
        <p>
            42.43752 = <?=round(42.43752, 2, PHP_ROUND_HALF_UP)?>
        </p>
    </div>
    <div>
        <h2>Переведение чисел из десятичных чисел в бинарные данные</h2>
        <div>
            <p>
                decbin - переводит из числовых значений в бинарные.
            </p>
            <p>
                decbin(100) = <?=decbin(100)?>
            </p>
            <p>
                decbin(decbin(13)) = <?=bindec(decbin(13))?>
            </p>

            <p>
                decbin(4252) = <?=decbin(4252)?>
            </p>
            <p>
                decbin(decbin(4252)) = <?=bindec(decbin(4252))?>
            </p>

            <p>
                decbin(89080) = <?=decbin(89080)?>
            </p>
            <p>
                decbin(decbin(89080)) = <?=bindec(decbin(89080))?>
            </p>
        </div>
    </div>
</body>
</html>