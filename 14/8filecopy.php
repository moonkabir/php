<?php
/*
terminal e ai command chalaite hobe
HP@MoonKabir MINGW64 /e/PHP
$ cd practise/14

HP@MoonKabir MINGW64 /e/PHP/practise/14
$ php 8filecopy.php
*/
function copyDir($source,$destination){
    $source = rtrim($source,"/");
    $destination = rtrim($destination,"/");
    $fileCount = 0;
    $directoryCount = 1;
    if(!file_exists($destination)){
        mkdir($destination);
    }
    foreach (scandir($source) as $file) {
        if ("." != $file && ".."!= $file) {
            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationPath = $destination.DIRECTORY_SEPARATOR.$file;
            if (is_dir($sourcePath)) {
                $result =  copyDir($sourcePath, $destinationPath);
                $fileCount  += $result[0];
                $directoryCount += $result[1];
            }elseif (is_file($sourcePath)) {
                $fileCount++;
                copy($sourcePath, $destinationPath);
            }
        }
    }
    return array($fileCount, $directoryCount);
}
$source = getcwd()."/source/philosophy";
$destination = getcwd()."/target/philosophy";
$fc = copyDir($source, $destination);
echo "Total {$fc[0]} files and {$fc[1]} directories have been copied";

// souse er vitore philosophy full theme cilo
// target er vitore philosophy full theme cilo