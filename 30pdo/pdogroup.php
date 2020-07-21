<?php
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=moon;charset=UTF8;",'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT sex, roll, name FROM moon WHERE class=? AND section=?");
$stmt->execute([1,'A']);
$data = $stmt->fetchAll(PDO::FETCH_GROUP);
echo "Total Female ".count($data['F']);