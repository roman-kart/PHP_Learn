<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Текущая дата"?></title>
</head>
<body>
    <h1>Текущая дата:</h1>
    <p>
        <?=date(DATE_W3C)?>
    </p>
    <footer>
        <h6>Copyright roman-kart@ 2021-<?=date("Y")?></h6>
    </footer>
</body>
</html>