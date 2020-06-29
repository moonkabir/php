<?php
$ch = curl_init('https://docs.google.com/forms/u/0/d/e/1FAIpQLScJr-S-QEbHTGVPfZlH8pXka7XlhzzBkqygJ5dltzY-8w3mGA/formResponse');
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, // ai khane data input hisabe asbo );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
if (curl_error($ch)) {
    echo curl_error($ch);
}else{
    echo $result;
}
