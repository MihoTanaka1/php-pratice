<?php
function nibai($a){
    $result = $a*2;
     return $result;
}

echo nibai(100)+100;

echo "\n";

 function add($a, $b){
     $result = $a + $b;
     return $result;
 }
 
 echo add(10,20);
 
 echo "\n";
 
 //問題3
 function kakeru($arr) {
     $result = 1;
     foreach($arr as $ar){
         $result = $result * $ar;
     }
     return $result;
 }
 echo kakeru(array(1,3,5,7,9));
 
 echo "\n";
 
 //問題4
 function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
     //どうしたらいいかわからない・・・・
     //もし$may_numberより$aが大きかったら$max_numberに＄aを代入する
         if($max_number < $a){
             $max_number = $a;
         }
     }
     return $max_number;
 }
 echo max_array(array(1,3,4,6,2,10,5));