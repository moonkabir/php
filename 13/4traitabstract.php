<?php 
// ekta trait er static property jodi alada alada class use kore tahole er instantiate alada alada hoy
trait MyTrait{
    static $number;
    abstract function sayHi();
}
class MyClassA{
    use MyTrait;
    function sayHi(){
        echo "hi";
    }
}
class MyClassB{
    use MyTrait;
    function sayHi(){
        echo "hi++";
    }
}
MyClassA::$number = 2;
MyClassB::$number = 8;
echo MyClassA::$number;//2

$ma = new MyClassA();
$mb = new MyClassB();

echo $ma::$number;//2
echo MyClassB::$number;//8
echo $mb::$number;//8
