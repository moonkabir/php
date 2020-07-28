<?php
$str = <<<STRING
quick   brown 
fox jumps   over the 
lazy dog
STRING;
echo preg_match_all('/[\S]+[\W]?/',$str,$matches);