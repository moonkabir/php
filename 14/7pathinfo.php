<?php
const FILENAME = "e:/PHP/practise/14/7pathinfo.php";
echo pathinfo(FILENAME,PATHINFO_BASENAME);
echo PHP_EOL;
echo pathinfo(pathinfo(FILENAME,PATHINFO_DIRNAME),PATHINFO_BASENAME);
echo PHP_EOL;
echo pathinfo(FILENAME,PATHINFO_EXTENSION);
echo PHP_EOL;
echo pathinfo(FILENAME, PATHINFO_FILENAME);