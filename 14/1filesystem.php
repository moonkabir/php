<?php 
echo getcwd();
echo PHP_EOL;
$entries = scandir(getcwd());
// print_r($entries);
foreach($entries as $entry){
    if ("."!=$entry && ".."!=$entry) {
        if (is_dir($entry)) {
            echo "[d] {$entry} \n";
        }else {
            echo "[f] {$entry} \n";
        }
    }
}
function countDir($dir){
    $count = 0;
    $entries = scandir(getcwd());
    foreach($entries as $entry){
        if ("."!=$entry && ".."!=$entry) {
            if (is_dir($entry)) {
                $count++;
            }
        }
    }
    return $count;
}
echo countDir(getcwd());
echo PHP_EOL;
// ------------opendir------------
$entries = opendir(getcwd());
while (false !== ($entry = readdir($entries))) {
    echo $entry."\n";
}