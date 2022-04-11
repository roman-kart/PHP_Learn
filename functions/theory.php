<?php
    const CURRENT_PAGE_NAME = "Функции - теория";
?>

<?php
    class MyFunctions{
        public const RUSSIAN_ALPHABET_LEFT_BORDER = 1040;
        public const RUSSIAN_ALPHABET_RIGHT_BORDER = 1103;
        public static function getRandomString(int $len = 10) : string
        {
            $resultCharArray = [];
            for ($i=0; $i < $len; $i++) {
                $currentUnicode = random_int(
                    MyFunctions::RUSSIAN_ALPHABET_LEFT_BORDER,
                    MyFunctions::RUSSIAN_ALPHABET_RIGHT_BORDER
                );
                $resultCharArray[$i] = mb_chr($currentUnicode);
            }
            return implode($resultCharArray);
        }
        public static function setRandomString(string &$current, int $len = 10){
            $current = MyFunctions::getRandomString($len);
        }
        public static function showInList(bool $IsUl, ...$elements){
            echo $IsUl ? '<ul>' : '<ol>';
            foreach ($elements as $value) {
                echo '<li>' . $value . '</li>';
            }
            echo $IsUl ? '</ul>' : '</ol>';
        }
        public static function tooManyArgs($val1, $val2, $val3){
            echo '<ul>';
            echo '<li>' . $val1 . '</li>';
            echo '<li>' . $val2 . '</li>';
            echo '<li>' . $val3 . '</li>';
            echo '</ul>';
        }
        public static function counter(){
            static $current = 0;
            return $current++;
        }
        # сортирует числовые неассоциативные массивы по возрастанию
        public static function MergeSort(array $current) : array
        {
            // если длина текущего массива меньше или равна 1 - возвращаем его, так как он уже отсортирован
            if (count($current) <= 1) {
                return $current;
            }
            // если длина текущего массива равна 2, то сортируем его
            elseif(count($current) === 2){
                if ($current[0] > $current[1]) {
                    return [$current[1], $current[0]];
                }
                else{
                    return [$current[0], $current[1]];
                }
            }
            // в протирвном случае - вызываем вызываем рекурсивную сортировку
            else{
                $currentCount = count($current);
                $str = 'dgdfg';
                $i = 
                $middle = intval(count($current) / 2); // находим серединный индекс массива
                $left = array_slice($current, 0, $middle);
                $right = array_slice($current, $middle, count($current) - 1);
                
                $sortedLeft = MyFunctions::MergeSort($left);
                $sortedRight = MyFunctions::MergeSort($right);

                $sortedResult = [];
                $leftIndex = 0;
                $rightIndex = 0;
                $leftCount = count($sortedLeft);
                $rightCount = count($sortedRight);
                for ($i=0; $i < $currentCount; $i++) { 
                    if($leftIndex >= $leftCount){
                        $sortedResult[$i] = $sortedRight[$rightIndex];
                        $rightIndex++;
                    }
                    elseif ($rightIndex >= $rightCount) {
                        $sortedResult[$i] = $sortedLeft[$leftIndex];
                        $leftIndex++;
                    }
                    else{
                        if($sortedLeft[$leftIndex] < $sortedRight[$rightIndex]){
                            $sortedResult[$i] = $sortedLeft[$leftIndex];
                            $leftIndex++;
                        }
                        else{
                            $sortedResult[$i] = $sortedRight[$rightIndex];
                            $rightIndex++;
                        }
                    }
                }
                return $sortedResult;
            }
        }
    }
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
        <p>
            Random string: <?=MyFunctions::getRandomString()?>
        </p>
        <p>
            <?php
                $q = 1;
            ?>
            Random string WTF: <?=MyFunctions::getRandomString($q = $q + 3)?>
        </p>
        <p>
            <?php
                $currentRandomStr = "";
                MyFunctions::setRandomString($currentRandomStr);
            ?>
            Random string (argument per link): <?=$currentRandomStr?>
        </p>
    </div>
    <div>
        <p>
            <?php
                MyFunctions::showInList(false, 'Python', 'PHP', 'C#');
                
                $args = ['Visual Studio', 'PyCHarm', 'IDLE'];
                MyFunctions::tooManyArgs(...$args);
            ?>
        </p>
    </div>
    <div>
        <?php
            echo '<ul>';
            for ($i=0; $i < 10; $i++) { 
                echo '<li>' . MyFunctions::counter() . '</li>';
            }
            echo '</ul>';
        ?>
    </div>
    <div>
        <?php
            $arrForSorting = [];
            for ($i=0; $i < 100; $i++) { 
                $arrForSorting[$i] = random_int(-100, 100);
            }
            echo '<h2>' . 'Arr before sorting: ' . '</h2>';
            echo '<pre>';
            print_r($arrForSorting);
            echo '</pre>';

            echo '<h2>' . 'Arr after sorting: ' . '</h2>';
            $sortedArr = MyFunctions::MergeSort($arrForSorting);
            echo '<pre>';
            print_r($sortedArr);
            echo '</pre>';
        ?>
    </div>
</body>
</html>