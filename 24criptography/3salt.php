<?php
$salt = "Th1s!s@s@lt";
$password = "Secret Password";
$hash = md5($password.$salt);
// echo $hash;
$userInput = "Secret Password";
if (md5($password.$salt)=="a186755318fab8c7a715ee1d3af133e7") {
    echo "Password Correct";
}else {
    echo "Password Incorrect ";
}