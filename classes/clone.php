<?php
    include_once "someclasses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клонирование объектов</title>
</head>
<body>
    <h1>Клонирование объектов</h1>
    <p>
        При присваивании переменной объекта класса,
        переменной передается ссылка на объекта, а не копия объекта.
    </p>
    <p>
        Чтобы передать копию используется конструкция clone.
    </p>
    <p>
        <?php
            $person1 = new Person;
            $person1->Name = "Oleg";
            $person1->Birthday = date("d.m.Y", mktime(0, 0, 0, 8, 12, 2009));

            $person2 = clone $person1;
            $person2->Name = "Alex";
        ?>
        <pre>
            <code>
&lt;?php
    $person1 = new Person;
    $person1->Name = "Oleg";
    $person1->Birthday = date("d.m.Y", mktime(0, 0, 0, 8, 12, 2009));

    $person2 = clone $person1;
    $person2->Name = "Alex";
?&gt;
            </code>
        </pre>
        <p>
            $person1->Name = <?=$person1->Name?>
        </p>
        <p>
            $person2->Name = <?=$person2->Name?>
        </p>
    </p>
</body>
</html>