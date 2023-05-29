<?php


// 課題１
function sum($max) {
    return $max * 2;
}
echo sum(40);
echo "\n";



//課題２
function add($a, $b){
    $result = $a + $b;
    return $result;
 }
 echo add(3,4);
 echo "\n";
 
 
 
 //課題３
 function jozan($arr){
     $result = 1;
     for($i = 0; $i < count($arr); $i++){
        $result *= $arr[$i];
     }
     return $result;
 }
echo jozan(array(1,3,5,7,9)) . "\n";



//課題４
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
      if($a > $max_number){
          $max_number = $a;
      }
  }
  return $max_number;
}



//課題５

//strip_tags
$text = '<p>Hello,<br>PHP</p>';
$strippedtext= strip_tags($text);
echo $strippedtext . "\n";

//array_push
$fruits = ['orange','banana'];
array_push($fruits,'apple');
print_r($fruits) . "\n";

//array_merge
$array1 = ['a','b'];
$array2 = ['c','d'];
$mergedarrray = array_merge($array1,$array2);
print_r($mergedarrray) . "\n";

//time,mktime
$currenttimestamp = time();
echo $currenttimestamp . "\n";

$customtimestamp = mktime(15,23,48,5,29,2023);
echo $customtimestamp . "\n";

//date
$currentdate = date('Y-m-d');
echo $currentdate . "\n";

$currentdatetime = date('Y-m-dH:i:s');
echo $currentdatetime . "\n";