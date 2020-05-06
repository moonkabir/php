<?php 
/**
 * 2.1 chapter function
 * function of calculating even or odd
 */
function is_Even($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}
/**
 * 2.2 chapter function
 * function of calculating factorial
 */
// function factorial(int $n) php 7 er type check fiture 
 function factorial( int $n){
    // aita funtion 5.2 er fiture funtion check korar
    // if(gettype($n)!="integer"){
    //     return "invalid";
    // }

    $result = 1;
    for ($i = $n; $i > 1; $i--) { 
        $result *= $i;
    }
    return $result;
 }
 
/**
 * 2.3 chapter function
 * function of parameter
 */
function serve($foodType= "Coffee",$numberOfItem = "1cup"){
    echo "{$numberOfItem} of {$foodType} have/has been served";
}