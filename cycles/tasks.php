<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Task 1</h2>
        <p>
            <?php
                $x1 = 0;
                $x2 = 1;

                echo '<ul>';
                echo "<li>" . $x1 . "</li>";
                echo "<li>" . $x2 . "</li>";
                $fibNum = 16;
                for($i = 0; $i < $fibNum - 2; $i++){
                    $tmp = $x2;
                    $x2 = $x2 + $x1;
                    $x1 = $tmp;
                    echo "<li>{$x2}</li>";
                }
                echo '</ul>';
            ?>
        </p>
    </div>
    <div>
        <h2>Task 2</h2>
        <?php
            $curMonthNum = (int) date("m");
            $curDayNum = (int) date("d");
            $curYearNum = (int) date("Y");
            $curMonthTime = mktime(0, 0, 0, $curMonthNum, 1, $curYearNum);
        ?> 
        <?php
            $mondayNum = 1;
            $firstMondayIndex = 0;
            // получение номера дня первого понедельника
            while(date("l", mktime(0, 0, 0, $curMonthNum, $mondayNum, $curYearNum)) !== "Monday"){
                $mondayNum++;
            }
            $modnayIsFirstDay = $mondayNum == 1; 
        ?>
        <?php
            $countOfDays = 1;
            while(intval(date("m", mktime(0, 0, 0, $curMonthNum, $countOfDays, $curYearNum))) == $curMonthNum){
                $countOfDays++;
            }
            --$countOfDays; // кол-во дней в месяце

            // получаем дату последнего воскресенья в месяце
            $lastSundayNum = 0;
            for ($i=$countOfDays; $i > 0; $i--) { 
                if(date("l", mktime(0 ,0, 0, $curMonthNum, $i, $curYearNum)) == "Sunday"){
                    $lastSundayNum = $i;
                    break;
                }
            }
            echo $mondayNum . "</br>";
            echo $lastSundayNum;
        ?>
        <table border="1">
            <thead>
                <tr>
                    <td>Пн</td>
                    <td>Вт</td>
                    <td>Ср</td>
                    <td>Чт</td>
                    <td>Пт</td>
                    <td>Сб</td>
                    <td>Вс</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $dayInCycle = 1;

                    if(!$modnayIsFirstDay){
                        echo '<tr>';

                        // заполняем неиспользуемые дни
                        $notInitDays = 7 - ($mondayNum - 1);
                        for($i = 0; $i < $notInitDays; $i++){
                            echo "<td style=\"background-color: grey\"></td>";
                        }

                        for($i = $notInitDays; $i < 7; $i++){
                            if($dayInCycle == $curDayNum){
                                $color = "green";
                            }
                            else{
                                $color = "pink";
                            }

                            echo "<td style=\"background-color:{$color}\">{$dayInCycle}</td>";
                            $dayInCycle++;
                        }

                        echo "</tr>";
                    }
                ?>

                <?php
                    for($i = $mondayNum; $i <= $lastSundayNum; ){
                        echo '<tr>';

                        for($j = 1; $j <= 7; $j++){
                            if($i == $curDayNum){
                                $color = "green";
                            }
                            else{
                                $color = "pink";
                            }

                            echo "<td style=\"background-color:{$color}\">{$i}</td>";
                            $i++;
                        }

                        echo '</tr>';
                    }

                    echo '<tr>';
                    for ($i = $mondayNum; $i <= $lastSundayNum; $i++) { 

                    }

                    echo '</tr>';
                ?>
                <?php
                    echo '<tr>';

                    for($i = $lastSundayNum + 1; $i <= $countOfDays; $i++){
                        if($i == $curDayNum){
                            $color = "green";
                        }
                        else{
                            $color = "pink";
                        }

                        echo "<td style=\"background-color:{$color}\">{$i}</td>";
                    }

                    echo '</tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>