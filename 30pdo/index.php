<?php
// mysql er jaygay sqllite,oracle aisob data base er nam likha jay
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=moon;charset=UTF8;",'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
if($pdo){
    $stmt = $pdo->query("select * from moon where class=1 and section='A'");
    $result = $stmt->fetchAll();
    print_r($result);
}