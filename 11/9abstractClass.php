<?php 
abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}
class Rectangle extends Shape{
    private $base ,$height;
    function __construct($base ,$height){
        $this->base = $base;
        $this->height = $height;
    }
    public function setBase ($base){
        $this->base = $base;
    }
    public function setHeight ($height){
        $this->height = $height;
    }
    function getArea(){
        return $this->base*$this->height;
    }
    function getPerimeter(){
    }

}

class Triangle extends shape{
    function getArea(){
    }
    function getPerimeter(){
    }
}
$rectangle = new Rectangle(10,10);
echo $rectangle->getArea();
// -------------11.10---------
// final keyword
echo PHP_EOL;

abstract class OurClass{
    final function doSomething(){
        echo "Do Something";
    }
}
class MyClass extends OurClass{

}
$mc = new MyClass();
$mc->doSomething();