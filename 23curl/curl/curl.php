<?php 
$ch = curl_init('');
curl_setopt($ch,CURLOPT_URL,'http://localhost/project/curl/php.php');
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=noodles');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$var = curl_exec($ch);
echo strtoupper($var);
?>

<!-- 23.10 
    curl er data banglay thakle seita unicode_encode('ai khane likte hoy'); 
-->

<!-- 23.11
    header pathano er jonno use kora hoice
-->

<!-- 23.12
    http debug er jonno curl verbose use kora hoy;
    curl get info diye sob kisu array hisabe return kore
    header er info dorkar hoile get_header diye info dekha jay
-->