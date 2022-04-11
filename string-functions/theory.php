<?php
header("Content-Type: text/html; charset=utf-8");
use PhpMyAdmin\Console;

    const CURRENT_PAGE_NAME = 'Строковые функции - теория';
?>

<?php
    class MyStrFunctions
    {
        public static function AllOccurencesInStr(string $str, string $s, bool $isStrictReg = false)
        {
            $result = [];
            $lastIndex = 0;
            while($lastIndex < mb_strlen($str)){
                $index = $isStrictReg ? mb_stripos($str, $s, $lastIndex) : mb_strpos($str, $s, $lastIndex);
                if(!$index){
                    return $result;
                }
                else{
                    array_push($result, $index);
                    $lastIndex = $index + mb_strlen($s);
                }
            }
            return $result;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=CURRENT_PAGE_NAME?></title>
</head>
<body>
    <h1><?=CURRENT_PAGE_NAME?></h1>
    <div>
        <h2>UTF-8 в PHP</h2>
        <?php
            $message = 'Проблемы с доступом к joycasino.com?';
            $messageArr = mb_str_split($message);
            $colors = ['red', 'blue', 'green'];

            echo '<p>';
            for ($i=0; $i < count($messageArr); $i++) { 
                $color = $colors[random_int(0, count($colors) - 1)];
                echo "<span style=\"color: $color\">" . $messageArr[$i] . '</span>';
            }
            echo '</p>';
        ?>
    </div>
    <div>
        <h2>Поиск в строке</h2>
        <?php
            $str = 'Hello, world!';
            $sub1 = substr($str, 0, 5);
            $sub2 = substr($str, 7, 6);
            echo '<p>' . $sub1 . '</p>';
            echo '<p>' . $sub2 . '</p>';
        ?>
        <?php
            $bigString = 'PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) 
            - это распространённый язык программирования общего назначения с открытым исходным кодом. 
            PHP специально сконструирован для веб-разработок и его код может 
            внедряться непосредственно в HTML. СЪЕШЬ ЕЩЁ ЭТИХ МЯГКИХ ФРАНЦУСКИХ БУЛОК ДА ВЫПЕЙ ЧАЮ';
            $allOccurences = MyStrFunctions::AllOccurencesInStr($bigString, 'а');
            $bigStringArr = mb_str_split($bigString);

            echo '<ul>';
            foreach($allOccurences as $val){
                echo '<li>';
                echo $val . ' = ' . $bigStringArr[$val];
                echo '</li>';
            }
            echo '</ul>';
        ?>
    </div>
</body>
</html>