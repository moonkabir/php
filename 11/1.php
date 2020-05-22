<?php 
// class declear
class Human{
    public $name;
    function sayHi(){
        echo "salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "My name is {$this->name}";
    }
}

// object declear
$h1 = new Human(true);
$h1->name = "rubel\n";//set operartion

// object call
$h1->sayHi();
// echo $h1->name;//get operation

// same class but object name vinno
// object declear
$h2 = new Human(true);
$h2->name = "Moon\n";//set operartion

// object call
$h2->sayName();