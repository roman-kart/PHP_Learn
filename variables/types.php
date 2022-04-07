<?php
    error_reporting(); // подавляем замечания о неинициированных переменных
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типы данных в PHP</title>
</head>
<body>
    <h1>Типы данных в PHP</h1>
    <h2>В PHP существуют следующие типы данных:</h2>
    <ul>
        <li>
            int: <?=567?>
        </li>
        <li>
            double: <?=567.234?>
        </li>
        <li>
            string: <?="ssdfsdf".'sdfsdf'.`date("Y")`?></br>

            <?php
                $var = 10;
            ?>
            Интерполяция строк: <?="var = $var"?></br>

            <?php
                $var = "Везде";
            ?>
            Ограничение области названия переменной: <?="{$var}ход едет!"?>

            Обратные кавычки: </br>
            <?php
                echo `ls -l`;
            ?></br>

            Оператор <<<
            <?php
                echo '</br>';
                $x = 10;
                $str = <<< HTML_END
                <span style="color:red">Привет, я подсяду?</span> <span style="color:green">Спасибо.</span></br>
                x = $x
                HTML_END;
                echo $str;

                $str = <<< 'MARKER'
                    x = $x 
                MARKER;
                echo '</br>';
                echo 'Если маркер берется в кавычки: \'MARKER\', 
                то переменные внутри такой строки не интерпорлируются.</br>';
                echo $str;
            ?>
        </li>
        <li>
            bool: <?=true & true?>
        </li>
    </ul>
    <h2>Особенности работы с типами данных в PHP</h2>
    <ul>
        <li>
            Unset и null:
            <?php
                $oi = 10;
                $isOiExist = isset($oi);
                echo "</br>\$oi = $oi ($isOiExist)</br>";
                unset($oi);
                $isOiExist = isset($oi);
                echo "\$oi = $oi ($isOiExist)</br>";
            ?>
        </li>
        <li>
            Empty:
            <ul>
                <li>
                    $estr = "";</br>
                    $eint = 0;</br>
                    $zstr = "0";</br>
                    $ebool = false;</br>
                    <?php
                        if (empty($estr) & empty($eint) & empty($zstr) & empty($ebool)) {
                        ?>
                        <p>
                            <span style="color:green">Variables are empty!</span>
                        </p>
                    <?php        
                        }
                    ?>
                </li>
            </ul>
        </li>
        <li>
            gettype():
            <ul>
                <li><?=gettype(12)?></li>
                <li><?=gettype(true)?></li>
                <li><?=gettype(12.5)?></li>
                <li><?=gettype("sdfsdf")?></li>
            </ul>
        </li>
        <li>
            is_...():
            <ul>
                <li><?=is_int(10)?></li>
                <li><?=is_int("sdf")?></li>
                <li><?=is_bool(true)?></li>
                <li><?=is_bool("SDf")?></li>
            </ul>
        </li>
    </ul>

    <h2>Неявное преобразование:</h2>
    <ul>
        <li>
            <?php
                $str = "10";
                $int = $str + 10;
                echo "\"10\" + 10 =  $int";
            ?>
        </li>
    </ul>

    <h2>Явное преобразование: </h2>
    <ul>
        <li>
            <?php
                $float = 45.78;
                $number = (int)$float;

                echo "float and number: \$float = $float, \$number = $number";
            ?>
        </li>
        <li>
            <?php
                $var = (int)"10 november";
                echo "integer: $var";
                echo "</br>";

                $var = (integer)"13 november";
                echo "int: $var";
            ?>
        </li>
        <li>
            <?php
                $var = (bool)"true, it's true";
                echo "boolean: $var";
                echo "</br>";

                $var = (boolean)"false, it's false";
                echo "bool: $var";
            ?>
        </li>
        <li>
            <?php
                $var = (float)"10.234";
                echo "float: $var";
                echo "</br>";

                $var = (float)"101.23";
                echo "float: $var";
            ?>
        </li>
        <li>
            <?php
                $var = (double)"1001.23";
                echo "double: $var";
                echo "</br>";

                $var = (double)"987.23";
                echo "double: $var";
            ?>
        </li>
        <li>
            <?php
                $var = (string)true;
                echo "string: $var";
                echo "</br>";

                $var = (string)109.23;
                echo "string: $var";
            ?>
        </li>
        <li>
            <?php
                echo intval("12.123")."</br>";
                echo intval("12.123sdf")."</br>";
                echo intval("sdf12.123sdf")."</br>";
                echo doubleval("123.123")."</br>";
                echo doubleval("sdf123.123")."</br>";
                echo doubleval("sdf123.123sdf")."</br>";
            ?>
        </li>
    </ul>
</body>
</html>