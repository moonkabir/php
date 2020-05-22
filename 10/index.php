<?php 
// -------------10.1------------
// time function
echo time();
echo PHP_EOL;
echo microtime(true);
echo PHP_EOL;
var_dump(microtime(false));
echo PHP_EOL;
// calculate factorial time
$startTime = microtime(true);
factorial(100);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

function factorial($n){
    $result = 1;
    for ($i = 1; $i<=$n; $i++){
        $result *= $i;
    }
    return $result;
}

// -------------10.2------------
// time function niye kaj

// -------------10.3------------
// date theke time ber kora
echo time()."\n";
echo mktime(0,0,0,12,1,2018)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";
echo (22400-800)/(60*60)."\n";

echo PHP_EOL;
// $j1 = mktime(0,0,0,12,12,1980);
// $j2 = mktime(0,0,0,11,30,2018);
// echo date_diff($j1,$j2);
echo PHP_EOL;
// -------------10.4------------
// string to date time
echo mktime(0,0,0,12,12,1980)."\n";
echo strtotime("12 December, 1980")."\n";
echo time()."\n";
echo strtotime("now")."\n";
echo strtotime("+3days")."\n";

echo (strtotime("+2 weeks 7 days 24 hours 86400 seconds")-strtotime("now"))/(86400)."\n";

echo date('H:i:s A',strtotime('13 August 2005 11:12:05 PM'));

// object oriented date 

echo PHP_EOL;
$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 July 2013');
$difference = $d1->diff($d2); //date_diff($d1,$d2);
echo $difference->format('%y Year %m Month %d Days');

// --------------10.5-----------
// new code 
echo PHP_EOL;

$dateTimeZoneTaipei = new DateTimeZone("Asia/Kolkata");
$dateTimeZoneJapan = new DateTimeZone("Asia/Dhaka");

// Create two DateTime objects that will contain the same Unix timestamp, but
// have different timezones attached to them.
$dateTimeTaipei = new DateTime("2012-07-08 11:14:15", $dateTimeZoneTaipei);
$dateTimeJapan = new DateTime("2012-07-08 11:14:15", $dateTimeZoneJapan);

// Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// object, but using the timezone rules as defined for Tokyo
// ($dateTimeZoneJapan).
$diff = date_diff( $dateTimeJapan, $dateTimeTaipei);
echo $diff->format("%H hours %i minutes");
echo $diff->invert;