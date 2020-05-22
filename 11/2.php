<?php 
// class declear
class Human{
    public $name;
    public $age;
    // constractor decleare
    public function __construct($personName,$personAge = 0){
        // echo "New Human object is created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }
    public function sayHi(){
        echo "salam\n";
        $this->sayName();
    }
    public function sayName(){
        if($this->age){
            echo "My name is {$this->name}";
            echo "My age is {$this->age}\n";
        }else{
            echo "My name is {$this->name}";
            echo "I don't know how old I am\n";
        }
    }
}

// object declear
$h1 = new Human("rubel\n",13);
// object call
$h1->sayHi();

// object declear
$h2 = new Human("Moon\n",21);
// object call
$h2->sayHi();
