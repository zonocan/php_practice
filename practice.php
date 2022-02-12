<?php
 echo 'hello php!'."\n";

//課題1
 $a = 3;
 $b = 7;
 echo $a+$b."\n";

//課題2
$array_month = array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
echo $array_month[7]."\n";

//課題3
$hello = "Hello";
$name = "yutaro";
$world = "'s World!";

echo $hello,$name,$world."\n";

//課題4
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost."\n";

//課題5
$calendar = array(
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" =>"5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
    );
    
    echo $calendar["December"]."\n";
 
 
 //条件分と繰り返し文
 
 //課題1
    $name = "雄太郎";
    if ($name === "雄太郎") {
        echo "私は" . $name . "です"."\n";
    } else {
        echo $name . "ではありません ";
    }

 //課題2
    $start = 1;
    $end = 10000;
    $total = 0;
    for ($i = $start; $i <= $end; $i++) {
        $total += $i;
    }
        echo $total . "\n";
    
   
 //課題3
    $fruits = array("apple", "greap", "lemon", "mango", "painaple");
    
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }

 //課題4
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 == 0) {
            echo $i . "\n";
        }
    }


