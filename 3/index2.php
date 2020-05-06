<?php
// -------------3.14--------------
// array search
$numbers = array(778,11,22,34,3,2,2,55,777,'f','G','AABGK');
$n = 55;
if(in_array($n,$numbers,true)){ //true means by type check
    echo "{$n} found in array";
}else{
    "There is none of this {$n} number";
}
echo PHP_EOL;
$offset = array_search($n,$numbers);
echo $offset;
echo PHP_EOL;

$fruitsSort = array('a'=>'mango','b'=>'banana', 'jackfruit', 'orange','plum','dates');
$k = 'b';
if(key_exists($k,$fruitsSort)){
    echo "{$k} found in array";
}else{
    "There is none of this {$k} key";
}
echo PHP_EOL;
// -------------3.15--------------
// array intersect
// array_intersect(); //duita array er common gula ke niye array toiri kore
// array_intersect_assoc();//duita array er common gula ke niye array toiri kore sathe key o check kore
// array_diff();//omil gula returen kore command er first perametrer er

// -------------3.16--------------
// walk,map,filter
$number = array(7,11,2,3,4,5,2,6,8,9);
function square($n){
    printf("Square of %d is %d\n",$n,$n*$n);
}
array_walk($number,'square');
function cube($n){
    return $n*$n*$n;
}
$new_array = array_map('cube',$number);
print_r($new_array);
function even($n){
    return $n%2==0;
}
$new_array2 = array_filter($number,'even');//callback function
print_r($new_array2);

$fruits = array('mango','banana', 'jackfruit', 'orange','plum','dates','moon');
function filter($name){
    return $name[0]=='m';
}
$newFruits = array_filter($fruits,'filter');
print_r($newFruits);

// -------------3.17--------------
// array reduce
function sum($oldValue,$newValue){
    return $oldValue+$newValue;
}
$sum = array_reduce($number,'sum');
print_r($sum);
echo PHP_EOL;

// -------------3.18--------------
// list
$color = array(122,233,56);
list($red,$green,$blue) = $color;
echo $red;

// -------------3.19--------------
// range
echo PHP_EOL."-----range----".PHP_EOL;
$number = array();
for($i=12;$i<=20;$i++){
    array_push($number,$i);
}
print_r($number);

$number=range(12,20);
print_r($number);

$number=range(12,20,2);
print_r($number);
// start,end,stepping
foreach(range(0,50,7) as $evenNumber){
    if($evenNumber>0){
        echo $evenNumber ."\n";
    }
}

// -------------3.19--------------
// random number&& suffle diyeo kora jay
echo"-----random number----".PHP_EOL;
$random = mt_rand(0,25);
echo $random;