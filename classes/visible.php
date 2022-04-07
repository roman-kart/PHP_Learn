<?php
    include_once "someclasses.php";
?>

<?php
    $difVis = new DifferentVisible;
    $difVis->pubVal = "This variable is public!";
    // $difVis->protVal = "This variable is protected!"; // ошибка! нельзя обратиться
    // $difVis->privVal = "This variable is private!"; // ошибка! нельзя обратиться
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Области видимости</title>
</head>
<body>
    <h1>Области видимости</h1>
    <div>
        У переменных класса в PHP может быть 3 области видимости:
        <ul>
            <li>public - доступна из любой области кода,</li>
            <li>protected - доступна в текущем классе и в классах-наследниках,</li>
            <li>private - доступна только в текущем классе.</li>
        </ul>
    </div>
</body>
</html>