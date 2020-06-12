<?php 
$size = 0;
$rdi = new RecursiveDirectoryIterator(getcwd(),RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($rdi);
foreach ($files as $file) {
    if($file->isFile()){
        $size += $file->getSize();
    }
    if ($file->getFileName()=="c1.php") {
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
    }
}
$size = $size/1000;
echo "Directory Size ".$size. "kilobytes\n";
$size = $size/1000;
echo "Directory Size ".$size. "Megabytes";