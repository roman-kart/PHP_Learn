<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../source/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Массивы - задания</title>
</head>
<body>
    <h1>Массивы - задания</h1>
    <div>
        <h2>№1</h2>
        <?php
            $arrForRandom = ['fst', 'snd', 'thd', 'fth'];
            $randomIndex = random_int(0, count($arrForRandom) - 1);
            echo $arrForRandom[$randomIndex];
        ?>
    </div>
    <div>
        <h2>№3</h2>
        <?php
            $arrForRemoveDuplicates = [ 'fst' , 'snd', 'thd' , 'fth' , 'snd', 'thd' ];
            $arrDuplicatesRemoved = array_unique($arrForRemoveDuplicates);
            echo '<pre>';
            print_r($arrDuplicatesRemoved);
            echo '</pre>';
        ?>
    </div>
    <div>
        <h2>№4</h2>
        <?php
            $x = 1;
            $y = 2;
            echo '<h3>Normal: </h3>';
            echo 'Before: ' . '<br />';
            echo "\$x = $x" . '<br />';
            echo "\$y = $y" . '<br />';

            list($x, $y) = [$y, $x];
            echo 'After: ' . '<br />';
            echo "\$x = $x" . '<br />';
            echo "\$y = $y" . '<br />';

            $x = 1;
            $y = 2;
            echo '<h3>Not normal: </h3>';
            echo 'Before: ' . '<br />';
            echo "\$x = $x" . '<br />';
            echo "\$y = $y" . '<br />';

            $x=$x+$y-$y=$x;
            echo 'After: ' . '<br />';
            echo "\$x = $x" . '<br />';
            echo "\$y = $y" . '<br />';

        ?>
    </div>
    <div>
        <h2>№5</h2>
        <?php
            $randomArr = [];
            # заполняем массив случайными элементами
            for ($i=0; $i < random_int(50, 100); $i++) { 
                $randomArr[$i] = random_int(0, 100);
            }
            echo 'Array before sorting: ';
            echo '<pre>';
            print_r($randomArr);
            echo '</pre>';

            # сортируем массив
            array_multisort($randomArr);

            echo 'Array after sorting: ';
            echo '<pre>';
            print_r($randomArr);
            echo '</pre>';
        ?>
    </div>
    <div>
        <h2>№6</h2>
        <?php
            $arrFromArr = file("./months.txt");
            echo 'Array from file: ';
            echo '<pre>';
            print_r($arrFromArr);
            echo '</pre>';
        ?>
    </div>
</body>
</html>