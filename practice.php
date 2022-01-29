<?php
 echo 'hello php!';

//課題1
 $a = 3;
 $b = 7;
 echo $a+$b;

//課題2
$array_month = array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
echo $array_month[7];

//課題3
$hello = "Hello";
$name = "yutaro";
$world = "'s World!";

echo $hello,$name,$world;

//課題4
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

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
    
    echo $calendar["December"];
 
 
 //条件分と繰り返し文
 
 //課題1
 $name = "雄太郎";
 
    if($name == "雄太郎"){
        echo "私はあなたの名前です";
    }else {
        echo "あなたの名前ではありません";
    }
    
 //課題2
     for($i = 1; $i <= 10000; $i++ ){
        echo $i."\n";
    }
    
 //課題3
     $fruits = array("apple","greap","lemon","mango","painaple");
    
    foreach ($fruits as $fruit){
        echo $fruit."\n";
    }

 //課題3
     for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 == 0) {
            echo $i."\n";
        }
    }