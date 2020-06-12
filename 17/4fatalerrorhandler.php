<?php 
// fatal error show na korar jonno
ini_set('display_errors',0);
// memory limit baranor jonno
ini_set('memory_limit','1M');
// fatal error handler
function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        // do something
        echo "Fatal Error";
    }
}

// no_function(); 