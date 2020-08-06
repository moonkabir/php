<?php
// 46.4
// Route::get('/', function () {
//     echo "Welcome";
// });

// Route::get('/say/{name}', function ($name) {
//     echo "Welcome{$name}";
// });

// ROute::get('/hello/world','HelloController@sayHelloWorld');

//46.5

require "Router.php";

use OurApplication\Routing\Router;

Router::get('/',function(){
    echo "Welcome Home";
});

Router::get('/hello/world',function(){
    echo "Hello World";
});

