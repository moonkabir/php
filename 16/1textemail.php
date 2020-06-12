<?php 
$to = "moonkabir04@gmail.com";
$from = "moonkabir4@gmail.com";
$subject = "How is life";
$body = "Hello \n How are you?";
$headers = "From : {$from}\r\n";
echo mail($to, $subject, $body, $headers);