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
        <h2>Задание 1 - Версия языка PHP</h2>
        <p>
            Текущая версия языка PHP: <?=PHP_VERSION?>
        </p>
    </div>
    <div>
        <h2>Задание 2 - замена require_once</h2>
        <p>
            <h3>Код</h3>
            <pre>
                <code>
if(defined("including.php")){
    include "including.php";
}
if(defined("including.php")){
    include "including.php";
}
                </code>
            </pre>
            <?php
                if(!defined("including.php")){
                    include "including.php";
                }
                if(!defined("including.php")){
                    include "including.php";
                }
                echo "<p>"."MyClass::NAME = ".MyClass::NAME."</p>";
            ?>
        </p>
    </div>
</body>
</html>