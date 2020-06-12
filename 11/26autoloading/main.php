<?php
// 7.2 theke depricated hoye gece
// function __autoload($name){
//     include "{$name}.php";
// }

function autoload($name){
    if(strpos($name,"Planet_")!==false){
        $fileName = str_replace("Planet_","",$name);
        include strtolower("planets/{$fileName}.php");
    }else{
        include strtolower("{$name}.php");
    }
}

spl_autoload_register('autoload');

// (new Spaceship)->launch();
(new Bike)->getType();
(new Spaceship)->launch();
(new Planet_Mars)->getName();

