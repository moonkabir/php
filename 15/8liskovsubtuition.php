<?php 
// Liskov substuition problem

abstract class Bird{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}

abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager{
    function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();
    }

    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }

    function moveWalkingBird(WalkingBird $wb){
        $wb->walk();
    }
    
}

class Eagle extends FlyingBird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

class Hawk extends FlyingBird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

class Penguin extends WalkingBird{
    function eat(){

    }
    function sleep(){

    }
    function walk(){
        //walk the bird
    }
} 

// -------------part2----------
class Shape{

}
class Rectangle extends Shape{
    function setHeight($height){
        
    }
    function setWidth($width){

    }
}

class Square extends Shape{

}