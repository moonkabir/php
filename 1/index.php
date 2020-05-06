<?php
//----------- variable print er law 1.2-------------
$name = 'Bangladesh';
$age = 16;
$question = "How Are You";

$word = "age";
echo $word;
echo "\n";

$word = "age 16";
echo $word;
echo "\n";

echo 'Hello '.$name." ".$question;
echo "\n";
echo 'Hello $name';
echo "\n";
echo "Hello {$name}, {$question} \n";

//-------------- constant value print er law 1.3-------------
define('PI',3.1416);

echo "value of PI =".PI;
echo "\n";

echo constant('PI');
echo "\n";

$constant = 'constant';
echo "value of PI = {$constant('PI')} \n";

//---------------- output check 1.4--------------
var_dump($name);
$age = 13.44;
var_dump($age);

$fname = "Moon";
$lname = "kabir";

printf("My %s Name is %s %s","full",strtoupper($fname),strtoupper($lname));


//------------------1.9---------------
// number system
$n = 12;
$o = 017;
$h = 0x1B;
printf("The Number is %d and %d and %d\n",$n ,$o ,$h);
printf("The Binary euivalent of %d is %b \n",1212,1212);
printf("The octal euivalent of %o is %b \n",1212,1212);
printf("The Hexadecimal euivalent of %X is %b \n",1212,1212);

//---------------1.10-----------------
// variable swapping
printf('The Binary euivalent of %1$d is %1$b',12);
echo "\n";
$n =23.333;
printf("%.2f\n",$n);
// doshomik(.)aitao ekta ghor hisab kore nite hobe sathe dosomik er porer gulao
$m = 123.33;
$p = 12.44;
printf("%08.2f\n",$m);
printf("%08.2f\n",$p);
// ---------------1.11----------
// sprintf ouput return kore r printf output print kore

$fname = "Moon";
$lname = "Kabir"; 
$output = sprintf("My %s Name is %s %s \n","full",$fname,$lname);
echo $output;

// -----------------1.12-----------------
// if else niye alochona
// logical operator

// -----------------1.13-----------------
// leap year ber kora
$year = 1900;
if($year % 4 == 0 && ($year % 100 !=0 || $year % 400 ==0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo "\n";
// -----------------1.14-----------------
// nested if else

// -----------------1.15-----------------
// ternary operator

// -----------------1.16-----------------
// switch case 

// -----------------1.17-----------------
// nested switch case 

// -----------------1.18-----------------
// nested switch case problem

// -----------------1.19-----------------
// precidence power
 

// -----------------1.20-----------------
// control stucture er alternative syntext
// clone use kore kora 

if($year % 4 == 0 && ($year % 100 !=0 || $year % 400 ==0)):
    echo "{$year} is a leap year";
else:
    echo "{$year} is not a leap year";
endif;
echo PHP_EOL;

// -----------------1.21-----------------
//ternary operator check kore last er ? mark theke
$n = 10;
$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");
echo $result;
echo PHP_EOL;//php er new line built in function End Of Line


// -----------------1.22-----------------
// for loop
// while loop
// do while loop
// goto loop

echo "Go To Loop \n";
$i = 0;
a: $i++;
echo $i;
if($i<10) goto a;
echo PHP_EOL;
// -----------------1.23-----------------
// for loop Multilooping
for($i = 10,$j = 1; $i>0; $i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}

// -----------------1.23,1.24-----------------
// for loop factorial
$n = 3;
for($i = $n, $factorial = 1; $i > 1; $i--){
    $factorial*=$i;
}
printf("Factorial of %d is %d",$n, $factorial);
echo PHP_EOL;

// -----------------1.28-----------------
// continue and break

// -----------------1.29-----------------
// fibonacci series
echo "fibonacci series\n";
$veryold = 0;
$old = 1;
$new = 1;
for($i=0;$i<10;$i++){
    echo $veryold." ";
    $old = $new;
    $new = $old+$veryold;
    $veryold = $old;
}

// -----------------1.30,31-----------------
// null coles operator and speacis ship operator

// $start = $start ?? 1; specis ship operator