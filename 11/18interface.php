<?php
class DistrictCollection implements IteratorAggregate{
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
}

$districts = new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Dinajpur");
$districts->add("Dhaka");
$districts->add("Rangpur");
foreach ($districts as $district) {
    echo $district."\n";
}