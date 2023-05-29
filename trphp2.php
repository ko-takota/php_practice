<?php
//課題１
$name = 'ishikawa';

if ($name ==='ishikawa'){
    echo '私は石川です';
} else {
    echo '石川ではありません';
}
echo "\n";

//課題２
$total = 0;

for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//課題３
$fruits = [
    'orange',
    'banana',
    'pear',
    'blueberry',
    'pineapple'
    ];

foreach ($fruits as $fruits){
echo '要素は' . $fruits . "\n";
}

//課題４
$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){
  if($i % 5 == 0)
    echo $i . "\n";
}