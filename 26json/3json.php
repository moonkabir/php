<?php
class Person {
    public $firstName;
    public $lastName;
}
$p = new Person;
$p->firstName = "John";
$p->lastName = "Doe";
echo json_encode($p);
