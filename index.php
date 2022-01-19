<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP homework1</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="title"> PHP HomeWork #1 </div>    

    <?php

        // Task 1
        $a = 10;
        $b = 2;

        echo "<div>Задание 1</div>";
        echo "<br />";
        echo "Сумма: ";
        echo $a + $b;
        echo "<br />";
        echo "Разность: "; 
        echo $a - $b;
        echo "<br />";
        echo "Произведение: ";
        echo $a * $b;
        echo "<br />";
        echo "Частное: ";
        echo $a / $b;
        echo "<br />";
        echo "<hr />";

        //Task 2
        echo "<div>Задание 2</div>";
        echo "<br />";
        $x = 2;
        echo "<br />";
        $y = 6;
        echo "<br />";
        $z = 9;
        echo "<br />";

        echo ($x - 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
        echo "<br />";
        echo "<hr />";

        //Task 3
        echo "<div>Задание 3</div>";
        echo "<br />";
        $a = 17;
        echo "<br />";

        $b = 10;
        echo "<br />";

        $c = $a - $b;
        echo "<br />";

        $d = 7;
        echo "<br />";

        $result = $c + $d;
        echo "<br />";

        echo "result: " . $result;
        echo "<br />";
        echo "<hr />";

        //Task 4
        echo "<div>Задание 4</div>";
        echo "<br />";
        $text1 = 'Привет';
        echo "<br />";
        $text2 = 'Мир!';
        echo "<br />";
        echo $text1 . $text2;
        echo "<br />";
        echo "<hr />";

        //Task 5
        echo "<div>Задание 5</div>";
        echo "<br />";
        $name = 'Женя';
        echo "<br />";

        echo "Привет {$name}!";
        echo "<br />";
        echo "<hr />";

        //Task 6
        echo "<div>Задание 6</div>";
        echo "<br />";
        $num = '12345';
        $sum = 1 + 2 + 3 + 4 + 5;
        echo "Сумма чисел: ". $sum;
        echo "<br />";
        echo "<hr />";

        //Task 7
        echo "<div>Задание 7</div>";
        echo "<br />";
        $hour = 60 * 60;
        $day = 24 * $hour;
        $year = 365 * $day;
        $month = $year / 12;

        $resultDate2 = 22 * $year + 19 * $day + 18 * $hour;
        
        echo "Прошло с начала 2000 года: " . $resultDate2 . ' .сек';
        echo "<br />";

        $today = "19 january 2022";
        $referencaDate = "1 january 2000";
        $resultDate = strtotime($today) - strtotime($referenceDate);

        echo "Прошло с начала 2000 года: " . $resultDate . ' .сек';
        echo "<br />";
        echo "<hr />";

        //Task 8
        echo "<div>Задание 8</div>";
        echo "<br />";
        $h = 12;
        $m = 25;
        $s = 35;

        echo "{$h}:{$m}:{$s}";
        echo "<br />";
        echo "<hr />";

        //Task 9
        echo "<div>Задание 9</div>";
        echo "<br />";
        $var = 1; 
        $var += 12;
        $var -= 14;
        $var *= 5;
        $var /= 7;
        $var++;
        --$var;
        echo $var;
        echo "<br />";
        echo "<hr />";

        //Task 10;
        echo "<div>Задание 10</div>";
        echo "<br />";
        define("SurName", 'Васюк');
        $Name = "Zhenya";
        $ThirdName = "Yrievich";
        $Age = 34;

        $nameArr = str_split($Name, 1);
        $thirdNameArr = str_split($ThirdName, 1);

        if(!defined(SurName)) {
            echo "Меня зовут " . SurName . " ( ". "$nameArr[0]. " . " $thirdNameArr[0]. " . ")";
            echo "<br />";
        } else {
            echo "Нет такой константы";
            echo "<br />";
        }
        echo "<hr />";
    ?>

</body>
</html>