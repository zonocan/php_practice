<?php

// 1~$maxまで足して結果を返す関数
function sum($max){
    
    //$result は結果を保存する変数
    $result = 0;
    
    //$iは1から始まり$maxより大きくなるまでループする
    for($i = 1; $i <= $max; $i++){
        
        //$resultに$iを足していく
        $result += $i;
    }
    //$resultを結果として返していく
    return $result . "\n";
}

echo sum (100);


//課題1(2倍の関数)

function num($n){
    $result = $n;
    return $result * 2 . "\n";
}
    
echo num(100);
    
//課題2($aと$bをたす課題)

function add($a,$b){
    $result = $a+$b;
    return $result;
}
    
echo add(198,119) . "\n";
    
//課題3
function number($arr){
    $result = $arr[0];
    for ($i = 1; $i <count($arr); $i++){
         $result *= $arr[$i];   
    }
    return $result;
}
    
echo number(array(1,3,5,7,9)) . "\n";
    
//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number) {
            $max_number = $a;
        }
    }
        
    return $max_number;
}
        
echo max_array(array(1000,900,89900,925,1,100));
    
?>