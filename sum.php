<?php

// 1~$maxまで足して結果を返す関数
    function sum($max) {
        //$result は結果を保存する変数
        $result = 0;
        //$iは1から始まり$maxより大きくなるまでループする
        for ($i = 1; $i <= $max; $i++) {
            //$resultに$iを足していく
            $result += $i;
        }
        //$resultを結果として返していく
        return $result;
    }

    echo sum (100) . "\n";


//課題1(2倍の関数)

    function num($n) {
        return $n * 2;
    }
        
    echo num(100) . "\n";
    
//課題2($aと$bをたす課題)

    function add($a, $b) {
        return $a + $b;
    }
        
    echo add(198, 119) . "\n";
    
//課題3

    function calc($arr) {
        $result = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
             $result *= $arr[$i];   
        }
        return $result;
    }
        
    echo calc(array(4, 3, 5, 7, 9)) . "\n";
    
//課題4

    function max_array($arr) {
        $max_number = $arr[0];
        foreach ($arr as $a) {
            if ($a > $max_number) {
                $max_number = $a;
            }
        }
            
        return $max_number;
    }
            
    echo max_array(array(1000, 900, 89900, 925, 1, 100000000)) . "\n";
    
//課題5

    //strip_tagsの除去前
    $text = '<p>テスト</p><h1>coment(ここを除去)</h1><a href>リンク</a>';
    echo $text . "\n";
        
    //strip_tagsした後（<p>タグと<a>タグだけの表示）
    $text = '<p>テスト</p><h1>coment(ここを除去)</h1><a href>リンク</a>';
    echo strip_tags($text, '<p><a>') . "\n";
    
    //array_push
    $fruits = array("orange", "banana");
    array_push($fruits, "apple", "raspberry");
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }
    
    //array_merge
    $array1 = array("アメリカ" => "ワシントン", "フランス" => "パリ", "イギリス" => "ロンドン");
    $array2 = array("日本" => "東京", "中国" => "北京", "韓国" => "ソウル");
    $countris = array_merge($array1, $array2);
    foreach ($countris as $country => $capital) {
        echo $country . "→" . $capital . "\n";
    }
    
    //time, date
    $nextWeek = time() + (7 * 24 * 60 * 60);
    echo '現在  ' . date('Y-m-d') . "\n";
    echo '来週  ' . date('Y-m-d', $nextWeek) . "\n";
    
    //mktime, date
    //10日間までの期間（日にち）の表示
    for ($i = 0; $i < 10; $i++) {
        $period = mktime(0, 0, 0, 2, 12 + $i, 2020);
        echo date('Y/m/d H:i:s', $period) . "\n";
    }
?>