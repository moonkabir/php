<?php
define("DB_HOST","127.0.0.1"); 
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","moon");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt= $mysqli->prepare("SELECT * FROM moon WHERE class=? AND section=?");
$class = 1;
$section = 'A';
$stmt->bind_param('is',$class,$section);
$stmt->execute();
echo $stmt->get_result()->num_rows."\n";

$class = 2;
$section = 'A';
$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()) {
    print_r($data);
}
$stmt->close();
// like sql command 29.5
//in operator sql command 29.6
// single statement 29.6 