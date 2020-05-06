<?php 
// ----------6.1----------
// string
$name = "rakib";

$string = "My name is $name \nnew line  \ttab \n";
echo $string;
$heredoc = <<<EOD
data 1
new Line $name
more text;
EOD;
echo $heredoc;

// ----------6.2----------
// ASCII number 

echo PHP_EOL;
echo ord("A");
echo PHP_EOL;
echo ord("a");
echo PHP_EOL;
echo chr(98);

// ----------6.3----------
// string to code access 

echo PHP_EOL;
$string = "Hello World";
echo substr($string,-9,-3);

// ----------6.3----------
// string reverse

echo PHP_EOL;
echo strrev($string);