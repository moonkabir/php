<?php

class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;
    function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }
// data clone kore first e shelo copy hoy ate second er change e first er tao change hoye jay but ai functon ta er karone ai copy tao abar change kore clone banay ate r second er change enotun ta change hoy na
    function __clone(){
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor('Some Data','red');
print_r($fc1);

$fc2 = clone $fc1;
print_r($fc2);

$fc2->updateColor('green');
print_r($fc1);
print_r($fc2);