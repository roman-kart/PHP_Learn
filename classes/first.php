<?php
    class Fruit{
        public $Title;
        public $Weight;
    }
?>
<?php
    // Ошибка! В данном файле объявляется класс, а 2-х классов с одинаковым имененем в PHP 
    // быть не может!
    // include "someclasses.php";
    // include "someclasses.php";
?>

<?php
    // ошибки нет, так как используется конструкция include_once,
    // которая включает в себя этот файл лишь один раз
    include_once "someclasses.php";
    include_once "someclasses.php";
    $person = new Person;
    $person->Name = "Ivan";
    $person->Birthday = date("d.m.Y", mktime(0, 0, 0, 7, 5, 2003));
    $person->PassportNumber = 1234678432;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первый класс</title>
</head>
<body>
    <h1>Первый раз в первый класс :)</h1>
    <div>
        <h2>Получение информации из объекта $person</h2>
        <p>
            $person->Name = <?=$person->Name?>
        </p>
        <p>
            $person->Birthday = <?=$person->Birthday?>
        </p>
        <p>
            $person->PassportNumber = <?=$person->PassportNumber?>
        </p>
    </div>

    <?php
        // освобождаем место, занимаемое объектом $person, 
        // что позволит избежать утечки памяти
        unset($person)
    ?>
</body>
</html>