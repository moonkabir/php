<?php
class RGB
{
    private $color; //#ff0000
    private $red;
    private $green;
    private $blue;
// constructor call kora hoice
    public function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
// color return kora hoice value er modde
    public function getColor()
    {
        return $this->color;
    }
// color gula list korar por abar retun kora hoice array hisabe
/*
    public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }
*/
// prottekta colour er value te tar nijesso color bosano hoice
    public function readRGBColor()
    {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }
// constructor er kaj ta ai function maddome kora hoice
    public function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
// colour gula parse kore array te return kore list er maddome red green blue te assign kora
    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }
// alada alada kore red green blue er value newar jonno
/*
    public function getRed()
    {
        return $this->red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function getBlue()
    {
        return $this->blue;
    }
*/

}

$myColor = new RGB("#ffbb66");
$myColor->readRGBColor();
// alada value er jonno
// echo $myColor->getBlue();