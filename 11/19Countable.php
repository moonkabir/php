<?php
class DistrictCollection implements IteratorAggregate,Countable{
    private $districts;
    function __construct(){
        $this->districts = array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
    function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Dinajpur");
$districts->add("Dhaka");
$districts->add("Rangpur");
$districts->add("Sylhet");

echo count($districts);