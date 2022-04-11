<?php
    $arr = array('Ivan', 'Boris', 'Nastya');
    $associative = array(
        "Ivan" => "Programmer",
        "Boris" => "Product Manager",
        "Nastya" => "Motion Designer",
    );
    $rewriteAssociative = [
        "Ivan" => "Programmer",
        "Ivan" => "Product Manager",
        "Ivan" => "Motion Designer",
    ];
    $associativeNotNumerate = [
        "Nastya" => 1000,
        2000, 
        30000
    ];
    $bootArray = [
        true => "That's true.",
        false => "That's wrong!",
        null => "Not implemented!"
    ];
    $nestedArray = [
        'Cars' => [
            'Lada' => [
                'Lada Vesta',
                'Lada Granta',
                'Lada Kalina'
            ],
            'Renault' => [
                'Renault Sandero',
                'Renault Logan',
                'Renault Arkana',
                'Renault Duster'
            ]
        ],
        'Lorries' => [
            'Kamaz' => [
                'Kamaz 100M',
                'Kamaz 200M'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../source/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Массивы - теория</title>
</head>
<body>
    <h1>Массивы - теория</h1>
    <div>
        <h2>Содержимое массива</h2>
        <p>
            Содержимое массива можно получить при помощи 
            метода print_r(). Лучше обрамлять результат работы метода print_r() 
            в теги &lt;pre&gt;&lt;/pre&gt;, так как это позволит сохранить форматирование
            результата.
        </p>
        <h3>Результат работы print_r()</h3>
        <?php
            echo '<pre>';
            print_r($nestedArray);
            echo '</pre>';
        ?>
        <div>
            <h3>Обращение к элементам массива</h3>
            <p>
                У автопроизводителя Lada есть следующие модели:
                <ul>
                    <?php
                        foreach ($nestedArray['Cars']['Lada'] as $model) {
                            echo "<li>$model</li>";
                        }
                    ?>
                </ul>
            </p>
        </div>
        <div>
            <h3>Обмен значениями переменных без посредника</h3>
            <p>
                <?php
                    $x = 10;
                    $y = 34;

                    echo 'До: ' . "<br />";
                    echo "x = " . $x . "<br />";
                    echo "y = " . $y . "<br />";

                    list($x, $y) = [$y, $x];
                    echo 'После: ' . "<br />";
                    echo "x = " . $x . "<br />";
                    echo "y = " . $y . "<br />";
                ?>
            </p>
        </div>
        <div>
            <h3>Цикл foreach</h3>
            <p>
                <?php
                    foreach ($nestedArray as $key => $value) {
                        echo "$key = $value";
                    }
                ?>
            </p>
        </div>
        <div>
            <h3>Сложение массивов</h3>
            <p>
                <?php
                    $sumOfArrays = $nestedArray + $arr + $bootArray + $associative + $associativeNotNumerate;
                    echo '<pre>';
                    print_r($sumOfArrays);
                    echo '</pre>';
                ?>
            </p>
            <p>
                Если при сложении массивов появляются элементы с одинаковыми индексами, 
                то в итоговый массив попадают элементы из первого массива.
            </p>
        </div>
        <div>
            <h3>array_merge()</h3>
            <p>
                Если при сложении массивов появляются элементы с одинаковыми индексами, 
                то в итоговый массив попадают оба элемента, но у элемента из правого списка
                меняется индекс.
            </p>
            <?php
                $mergedArray = array_merge($nestedArray, $arr, $bootArray, $associative, $associativeNotNumerate);
                echo '<pre>';
                print_r($mergedArray);
                echo '</pre>';
            ?>
        </div>
        <div>
            <h3>Сравнение массивов</h3>
            <?php
                $arrAllDigit = [1, 2, 3];
                $arrDigitAndString = [1, '2', '3'];
                $arrStringKeys = ['0' => 1, '1' => 2, '2' => 3];

                echo '$arrAllDigit: ';
                echo '<pre>';
                print_r($arrAllDigit);
                echo '</pre>';
                echo '<br />';

                echo '$arrDigitAndString: ';
                echo '<pre>';
                print_r($arrDigitAndString);
                echo '</pre>';
                echo '<br />';

                echo '$arrStringKeys: ';
                echo '<pre>';
                print_r($arrStringKeys);
                echo '</pre>';
                echo '<br />';

                echo '$arrAllDigit ' . (($arrAllDigit === $arrDigitAndString) ? '===' : '!==') . ' $arrDigitAndString';
                echo '<br />';

                echo '$arrAllDigit ' . (($arrAllDigit == $arrDigitAndString) ? '==' : '!=') . ' $arrDigitAndString';
                echo '<br />';

                echo '$arrStringKeys ' . (($arrStringKeys == $arrDigitAndString) ? '==' : '!=') . ' $arrDigitAndString';
                echo '<br />';

                echo '$arrStringKeys ' . (($arrStringKeys === $arrDigitAndString) ? '===' : '!==') . ' $arrDigitAndString';
                echo '<br />';
            ?>
        </div>
        <div>
            <h3>Проверка массивов</h3>
            <?php
                $existingArr = [1, 2, 3];
                echo '$existingArr: ';
                echo '<pre>';
                print_r($existingArr);
                echo '</pre>';

                echo '$existingArr - ' . (isset($existingArr) ? 'exists' : 'doesn\' exist') . '<br />';
                echo '$notExistingArr - ' . (isset($notExistingArr) ? 'exists' : 'doesn\' exist') . '<br />';

                echo '$existingArr[0] - ' . (isset($existingArr[0]) ? 'set' : 'doesn\' set') . '<br />';
                echo '$existingArr[4] - ' . (isset($existingArr[4]) ? 'set' : 'doesn\' set') . '<br />';

                echo 'in_array(2, $existingArr) - ' . (in_array(2, $existingArr) ? 'in array' : 'not in array') . '<br />';
                echo 'in_array(\'str\', $existingArr) - ' . (in_array('str', $existingArr) ? 'in array' : 'not in array') . '<br />';
                echo 'in_array(\'2\', $existingArr) - ' . (in_array('2', $existingArr) ? 'in array' : 'not in array') . '<br />';
                echo 'in_array(\'2\', $existingArr, true) - ' . (in_array('2', $existingArr, true) ? 'in array' : 'not in array') . '<br />';

                echo 'array_key_exists(2, $existingArr) - ' . (array_key_exists(2, $existingArr) ? 'exist' : 'not exist') . '<br />';
                echo 'array_key_exists(7, $existingArr) - ' . (array_key_exists(7, $existingArr) ? 'exist' : 'not exist') . '<br />';

                echo 'array_search(2, $existingArr) - ' . (array_search(2, $existingArr) ? 'found' : 'not found') . '<br />';
                echo 'array_search(2, $existingArr) - ' . (array_search(9, $existingArr) ? 'found' : 'not found') . '<br />';
            ?>
        </div>
        <div>
            <h3>Удаление</h3>
            <?php
                $arrayForTestDeleting = [
                    'books' => [
                        'The Little Prince',
                        'The Hobbit',
                        'The Lion, the Witch and the Wardrobe'
                    ],
                    'movies' => [
                        'The Lion King',
                        'The green mile'
                    ]
                ];
                echo '$arrayForTestDeleting before unset($arrayForTestDeleting[\'movies\']): ';
                echo '<pre>';
                print_r($arrayForTestDeleting);
                echo '</pre>';

                echo '$arrayForTestDeleting after unset($arrayForTestDeleting[\'movies\']): ';
                unset($arrayForTestDeleting['movies']);
                echo '<pre>';
                print_r($arrayForTestDeleting);
                echo '</pre>';
            ?>
        </div>
    </div>
    <script src="../source/js/bootstrap.bundle.min.js"></script>
</body>
</html>