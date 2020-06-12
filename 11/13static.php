<?php
// static hoile self |baire theke access korte chaile :: diye access korte hobe
// public ba private hoile this  
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        echo self::$name."\n";
        self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }
    static function doSomething(){
        echo "Doing Something\n";
    }
    function factorial($n){
        self::$name = "ABCD";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculator factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;
