<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Условные операторы</h1>
    <div>
        <h2>Альтернативный синтаксис if...elseif...else</h2>
        <p>
            <?php
                $title = "keyboard";

                if($title === "keyboard"):
            ?>
            <strong>Keyborad</strong>
            <?php
                elseif($title === "mouse"):
            ?>
            <strong>mouse</strong>
            <?php
                else:
            ?>
            <strong>other</strong>
            <?php
                endif;
            ?>
        </p>
    </div>
    <div>
        <h2>Операторы для работы с логикой</h2>
        <p>
            <?php
                $flag1 = true;
                $flag2 = false;
            ?>
            <ul>
                <li>$flag1 && $flag2</li>
                <li>$flag1 || $flag2</li>
                <li>!$flag1</li>
            </ul>
        </p>
    </div>
    <div>
        <h2>Тернарный оператор</h2>
        <p>
            <?php
                $val = -12;
                $res = $val < 0 ? -$val : $val;
                echo "<p>" . "$val &lt; 0 ? -$val : $val = " . $res . "</p>";

                $val = 102;
                $res = $val < 0 ? -$val : $val;
                echo "<p>" . "$val &lt; 0 ? -$val : $val = " . $res . "</p>";
            ?>
        </p>
    </div>
    <div>
        <h2>Оператор ??</h2>
        <p>
            Если переменная была проинициализированная или ей было присвоено значение null,
            то проинициализировать. В противном случае не инициализировать.
        </p>
        <p>
            <pre>
                <code>
$x = null;
$y = "Hi!";

$x = $x ?? 12;
$y = $y ?? "Sdf";
$z = $z ?? "Good";

echo "&lt;p&gt;" . $x . "&lt;/p&gt;";
echo "&lt;p&gt;" . $y . "&lt;/p&gt;";
echo "&lt;p&gt;" . $z . "&lt;/p&gt;";
                </code>
            </pre>
            <?php
                $x = null;
                $y = "Hi!";

                $x = $x ?? 12;
                $y = $y ?? "Sdf";
                $z = $z ?? "Good";

                echo "<p>" . $x . "</p>";
                echo "<p>" . $y . "</p>";
                echo "<p>" . $z . "</p>";
            ?>
        </p>
    </div>
    <div>
        <h2>Оператор switch</h2>
        <p>
            <?php
                $val = 1;

                switch (true) {
                    case is_numeric($val):
                        echo 'numeric';
                        break;
                    case is_string($val):
                        echo 'string';
                        break;
                    default:
                        echo 'undefined!';
                        break;
                }
            ?>
        </p>
    </div>
</body>
</html>