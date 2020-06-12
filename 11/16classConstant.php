<?php 
define('OK',123);
echo OK;
echo PHP_EOL;
// constant always static scope e thake
class MyClass{
    const City = "Dhaka";
}
$m = new MyClass();
echo $m::City;