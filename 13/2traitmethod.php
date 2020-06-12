<?php 
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number series A\n";
        parent::numberSeriesA();
    }
    function numberSeriesB(){
        $this->numberSeriesA();
        echo "Number series B\n";
    }
}
 class SomeClass{
    function numberSeriesA(){
        echo "Printing+Printing Number series A\n";
    }
 }
class NumberSeries extends SomeClass{
    use NumberSeriesOne;
}


$ns = new NumberSeries(true);
$ns->numberSeriesA();