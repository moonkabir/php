<?php 
class Dir{
    private $directories=[];
    private $files=[];
    private $path;
    private $directoryObjects = [];
    function __construct($path){
        if (is_readable($path)) {
            $this->path = $path;
            $entries = scandir($path);
            foreach($entries as $entry){
                if ("."!=$entry && ".."!=$entry) {
                    if (is_dir($path.DIRECTORY_SEPARATOR.$entry)) {
                        array_push($this->directories,$entry);
                    }else {
                        array_push($this->files,$entry);
                    }
                }
            }
        }
    }
    function getDirectory($index){
        if(isset($this->directories[$index])){
            if(!isset($this->directoryObjects[$index])){
                echo "Creating New Object\n";
                $this->directoryObjects[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
            }else{
                echo "Using Old Object\n";
            }
            return $this->directoryObjects[$index];
        }else{
            throw new Exception("directory does not exist");
        }
        return false;
    }
    function getDirectories(){
        return $this->directories;
    }
    function getFiles(){
        return $this->files;
    }
}
$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFiles());

$practies = $directory->getDirectory(1);
print_r($practies->getDirectories());

$three = $practies->getDirectory(2);
print_r($three->getDirectories());