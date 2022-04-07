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
        <h2>Задание 1 - Вычисление расстояния в декартовом пространстве</h2>
        <?php
            class Point{
                public $x;
                public $y;
                public $z;
            }

            $p1 = new Point();
            $p1->x = 12;
            $p1->y = -12;
            $p1->z = 1;

            $p2 = new Point();
            $p2->x = 101;
            $p2->y = 92;
            $p2->z = -1;

            $distance = sqrt(
                pow($p1->x - $p2->x, 2) +
                pow($p1->y - $p2->y, 2) +
                pow($p1->z - $p2->z, 2)
            );
        ?>
        <div>
            <h3>Код</h3>
            <pre>
                <code>
class Point{
    public $x;
    public $y;
    public $z;
}

$p1 = new Point();
$p1->x = 12;
$p1->y = -12;
$p1->z = 1;

$p2 = new Point();
$p2->x = 101;
$p2->y = 92;
$p2->z = -1;

$distance = sqrt(
    pow($p1->x - $p2->x, 2) +
    pow($p1->y - $p2->y, 2) +
    pow($p1->z - $p2->z, 2)
);
                </code>
            </pre>
        </div>
        <p>
            Расстояние: <?=$distance?>
        </p>
    </div>
</body>
</html>