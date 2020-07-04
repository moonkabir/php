<?php
echo md5("Hellow This is Moon Kabir");
echo "\n";
echo sha1("Hellow This is Moon Kabir");
echo "\n";
print_r(hash_algos());
echo "\n";
echo hash("md5","Hellow This is Moon Kabir");
echo "\n";
echo mhash(MHASH_MD5,"Hellow This is Moon Kabir");
echo "\n";
echo bin2hex(mhash(MHASH_MD5,"Hellow This is Moon Kabir"));