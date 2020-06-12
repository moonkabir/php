<?php 
$di = new DirectoryIterator("./");
foreach ($di as $file) {
    if($file->isDOt()){
        continue;
    }
    if($file->isDir()){
        echo $file->getPathname()."\n";
    }
    else{
        echo $file->getPathname().":".$file->getSize()."\n";
    }
}