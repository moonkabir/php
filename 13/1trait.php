<?php 
trait NumberSeriesOne{
    private function numberSeriesA(){
        echo "Number series A\n";
    }
    function numberSeriesB(){
        $this->numberSeriesA();
        echo "Number series B\n";
    }
}
trait NumberSeriesTwo{
    private function numberSeriesC(){
        echo "Number series C\n";
    }
    function numberSeriesD(){
        echo "Number series D\n";
    }
}
class NumberSeries{
    use NumberSeriesOne;
}
$ns = new NumberSeries(true);
$ns->numberSeriesB();