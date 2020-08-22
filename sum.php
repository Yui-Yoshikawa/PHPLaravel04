<?php

//1

function multiple_number( $number ){
  return $number*2;
}

echo multiple_number( 5 );
echo "\n";

//2

function sum($a, $b){
  return $a + $b;
}

echo sum(1,2);
echo "\n";


//3

function f3($a){
  $result = 1;
  foreach ($a as $b) {
    // $result = $result*$b;
    $result *= $b;
  }
  return $result;
}

$arr = array(1,3,5,7,9);
echo f3($arr);
echo "\n";


//4

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if ($max_number < $a){
    $max_number = $a;
  }
 }
  return $max_number;
 }

$arr = array(1,5,10,15);
echo max_array($arr);
echo "\n";


//5

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

$stack = array("orange", "banana");
array_push ($stack, "apple", "raspberry");
print_r ($stack);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '.date('Y-m-d')."\n";
echo 'Next Week: '.date('Y-m-d', $nextWeek)."\n";
echo 'Next Week: '.date('Y-m-d', strtotime('+1 week'))."\n";

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 7, 1, 2000));
echo "\n";
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "\n";

date_default_timezone_set('UTC');
echo date("l");
echo "\n";
echo date('l js\of F Y h:i:s A');
echo "\n";
echo date(DATE_RFC2822);
echo "\n";
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "\n";