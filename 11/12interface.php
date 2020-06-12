<?php
interface BaseAnimal{
    function IsAlive();
    function CanEat($param1, $param2);
    function Breed();
}
class Animal implements BaseAnimal{
    function IsAlive(){}
    function CanEat($param1, $param2){}
    function Breed(){}
}
interface BaseHuman extends BaseAnimal{
    function CanTalk();
}
class Human implements BaseHuman{
    function IsAlive(){}
    function CanEat($param1, $param2){}
    function Breed(){}
    function CanTalk(){}
}
$h =new Human(true);
echo $h instanceof BaseHuman;
