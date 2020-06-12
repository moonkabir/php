<?php 
class A{
    static $name;
    static function sayHi(){
        self::$name = "ABCD";
        echo "Hi From A\n";
    }
}
class B extends A{
    static function sayHi(){
        echo "Hi From B\n";
        parent::sayHi();
    }
}
B::sayHi();
echo B::$name;