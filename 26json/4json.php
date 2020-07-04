<?php
class Person {
    public $firstName;
    public $lastName;
}
$p = new Person;
$p->firstName = "John";
$p->lastName = "Doe";
$jsonData =  json_encode($p);
echo $jsonData;
$decodedJsonData = json_decode($jsonData,true);//false thakle object retirn kore 
echo "\n";
echo $decodedJsonData["firstName"];
echo "\n";
print_r($decodedJsonData);
