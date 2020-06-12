<?php 
class MotorCycle{
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage){
        $this->mileage = $mileage;
        $this->displacement = $displacement;
        $this->capacity = $capacity;
    }
    function getDisplacement(){
        return $this->displacement;
    }
    function setDisplacement($displacement){
        $this->displacement = $displacement;
    }
    function __isset($name){
        if (!isset($this->$name)) {
            echo "{$name} is not found";
            return false;
        }
        return true;
    }
    // magic method 
    function __get($name){
        echo $this->$name;//$this->displacement
    }
}
$pulsar = new MotorCycle('150cc','15L','50kmph');
echo $pulsar->getDisplacement();
echo PHP_EOL;
echo $pulsar->capacity;
echo PHP_EOL;
if (isset($pulsar->tiresize)) {
    echo $pulsar->tiresize;
}