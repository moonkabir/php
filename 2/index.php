<?php

//------2.1 rules of function----

include_once "function.php";
$x = 12;

if(is_Even($x)){
    echo "{$x} is an even number";
}else{
    echo "{$x} is a odd number";
}
echo PHP_EOL;

//------2.2 factorial function----

$y = 3;
echo "Factorial of {$y} is ".factorial($y);
echo PHP_EOL;
//------2.3 parameter function----

$ft = "Tea";
$n = "4cups";
serve($ft,$n);
echo PHP_EOL;

// ---------2.4 return type function---------

function sum(int $x, int $y):int{ //aita return type thik korar jonno
    return $x+$y;
}
echo sum(5,6);
echo PHP_EOL;

// ---------2.5 return type function---------

function result(int ...$numbers):int{ 
    $total = 0;
    for($i = 0;$i<count($numbers);$i++){
        $total += $numbers[$i];
    }
    return $total;
}
echo result(5,6,6,6,8);
echo PHP_EOL;

// ---------2.6 divided into many function---------

function doTaskA(){
    echo "Step A Done\n";
}
function doTaskB(){
    echo "Step B Done\n";
}
function doTaskC(){
    echo "Step C Done\n";
}
function largerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
}
largerTask();

// ---------2.7 recursive function---------
function printNumber($counter, $end, $stepping){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}
echo"reursive function\n";
printNumber(21,37,2);

// ---------2.8 fibonacci series function---------

echo"fibonacci series\n";
function fibonacci($old = 0, $new = 1, $end){

    static $start;
    $start = $start ?? 1;

    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci($old, $new, $end);
}
fibonacci(0,1,10);
echo PHP_EOL;

// -----------------2.9-----------------
// variable scope

// -----------------2.10-----------------
// factorial of recursive function

function req_factorial($a){
    if($a <= 1){
        return 1;
    }
    return $a * req_factorial($a - 1);
}
echo req_factorial(6);
echo PHP_EOL;