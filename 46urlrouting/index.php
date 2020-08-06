<?php
// 46.3
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// 46.4
$url = $_SERVER['REQUEST_URI'];
if(preg_match("~^/hello/(\w+)/?$~",$url,$matches)){
    echo $matches[1];
}

if(preg_match("~^/$~",$url)){
    echo "Welcome Home";
}

if(preg_match("~^/number/(\d+)/do/(\w+)/?$~",$url,$matches)){
    echo $matches[1];
    echo "<br>";
    echo $matches[2];
}