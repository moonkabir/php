<?php
$ch = curl_init('link bosbe form.php er');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,POST);
curl_setopt($ch, CURLOPT_POSTFIELDS,'data');
$cookie_file = '/tmp/cookies.txt';
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);
echo curl_exec($ch);

$ch = curl_init('url');
curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
echo curl_exec($ch);