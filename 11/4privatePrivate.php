<?php 
class fund{
    private $fund;
    function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }
    public function addFund($money){
        $this->fund += $money;
        // $this->deductFund(0); //private function gula ke nijer vitorer function gula access nite pare 
    }
    public function deductFund($money){
        $this->fund -= $money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
// $ourFund->Fund = 75; //private function ke class er bahir theke access korte pare na
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->deductFund(7);
$ourFund->getTotal();
