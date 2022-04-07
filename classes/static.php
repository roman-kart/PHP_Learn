<?php
    include_once "someclasses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статические переменные</title>
</head>
<body>
    <h1>Статические переменные</h1>
    <p>
        Переменные класса, объявленные с модификатором static 
        позволяют задавать значения на уровне класса, 
        а не на уровне объекта.
    </p>
    <p>
        Пример: название программы - <?=StaticVariables::$ProgramName?>
    </p>
</body>
</html>