<?php 
/*
HP@MoonKabir MINGW64 /e/PHP
$ cd practise/14
HP@MoonKabir MINGW64 /e/PHP/practise/14
$ php 2filesystem.php
ai khaner command duita teminal e dite hobe
*/
// -----------create tree directories---------
// mkdir("test");
// -----------create tree directories---------
// mkdir("test/d1/d2/d3",0777,true);
// ----------create and delete----------
// mkdir("test",0777,true);//creat directories
// file_put_contents("test/f.txt","hellow");
// sleep(5);//sleep 3 sec
// unlink("test/f.txt");//unlink the file
// rmdir("test"); //delet directories
// -------------------example-------
mkdir("test/d1/d2/d3",0777,true);
file_put_contents("test/f.txt","hello");
sleep(10);
// unlink("test/f.txt");
// rmdir("test");
deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");

function deleteDir($path){
    if(!is_readable($path)){
        return;
    }
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if(is_dir($filePath)){
                    deleteDir($filePath);
                }else{
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}
