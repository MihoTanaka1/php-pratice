<?php
$name = "田中美帆";
if($name =="田中美帆") {
    echo $name;
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

for($i = 0; $i <= 100; $i++){
  echo $i;
}

echo "\n";

$fruits = array("いちご", "ぶどう", "いちじく","くり","みかん");
foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}
echo "\n";

/* for文の始めの値を定義する /

/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
}
}
