<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin toss</title>
</head>
<body>
    <?php
        $resultCointToss = "";
        $divColor = "";
        if(mt_rand(0, 1) == 1){
            $resultCointToss = "Орел";
            $divColor = "green";
        }
        else{
            $resultCointToss = "Решка";
            $divColor = "blue";
        }
    ?>
    <div style="color:<?php echo $divColor?>">
        <h1><?php echo $resultCointToss?></h1>
    </div>
</body>
</html>