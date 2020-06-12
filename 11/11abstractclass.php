<?php 
class Shape{

}
class shapes{
    private $shapes;
    function __construct(){
       $this->shapes = array(); 
    }
    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }
    function totalShapes(){
        return count($this->shapes);
    } 
}
class Rectangle extends shape{}
class Triangle extends shape{}
class Student{}

$shapesCollection = new shapes();
$shapesCollection ->addShape(new Rectangle(true));
$shapesCollection ->addShape(new Triangle(true));
// $shapesCollection ->addShape(new Student(true));

echo $shapesCollection->totalShapes();