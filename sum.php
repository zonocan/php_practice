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
    return $result;
}

echo sum (100);


//課題1(2倍の関数)
    function num($n){
        
        $num_n = $n;
        
        
        return $num_n*2;
    
        
    }
    
    echo num();
    
//課題2($aと$bをたす課題)
    function add($a,$b){
        $num_add = $a+$b;
        return $num_add;
    }
    echo add(103,119);
    
    
?>