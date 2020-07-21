<?php
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=moon;charset=UTF8;",'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT roll, name FROM moon WHERE class=? AND section=?");
// execute way te

$stmt->execute([1,'A']);
print_r($stmt->fetchAll(PDO::FETCH_KEY_PAIR));

// bindparam way te 
// $class = 1; $section = 'A';
// $stmt->bindParam(1,$class,PDO::PARAM_INT);
// $stmt->bindParam(2,$section,PDO::PARAM_STR);
// $stmt->execute();
// print_r($stmt->fetchAll());