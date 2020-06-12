<?php
class Someclass{
    static $instance;
    private $name;
    function __construct($name){
        $this->name = $name;
        echo "new instance created\n";
    }
    static function getInstance($name=null){
        if (!self::$instance) {
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass("");
            }
        }else{
            echo "old Instance Supplied\n";
        }
        return self::$instance;
    }
    function sayName(){
        echo $this->name."\n";
    }
}

$sc1 = SomeClass::getInstance("Rahim");
//this is problem to it does not change rahim to karim
$sc2 = SomeClass::getInstance("Kahim");
$sc3 = SomeClass::getInstance();

$sc1->sayName();
$sc2->sayName();
$sc3->sayName();