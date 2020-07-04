<?php
// print_r(openssl_get_cipher_methods(true));
// phpinfo();
// open ssl kaj kore na 
$iv_len = openssl_cipher_iv_length("aes-128-cbc");
$iv = openssl_random_pseudo_bytes($iv_len); //random_bytes
$enc = openssl_encrypt("Hello","aes-128-cbc","DingDong",0,$iv);
echo $enc;