<?php 
// -------------7.1-------------
// file read
$filename = "E:/PHP/practice/7/data/file.txt";
if(is_readable($filename)){
// /e/PHP/practice/7
$fp = fopen($filename,"r");
// $line = fgets($fp);//second value ofset number 
// echo $line;
while ($line = fgets($fp)) {
    echo $line;
}
fclose($fp);
// echo PHP_EOL;
$data = file($filename);
print_r($data);
$data = file_get_contents($filename);
print_r($data);
}
// -------------7.2-------------
// file write
// 7.3 file wirteable check
$filename2 = "E:/PHP/practice/7/data/file2.txt";
if(is_writable($filename2)){
$exixtingData = file_get_contents($filename2);
$fp2 = fopen($filename2,"w");
$fw = fwrite($fp2,$exixtingData);
$fw = fwrite($fp2,"Mercury\n");
fclose($fp2);

$fp3 = fopen($filename2,"a");
$fw = fwrite($fp3,"Mercury\n");
}

// -------------7.4-------------
//a+ r+ W+ mood niye kotha barta

// -------------7.5-------------
//file put contents

$filename2 = "E:/PHP/practice/7/data/file2.txt";
file_put_contents($filename2,array("Urenus\n","Neptune\n","Pluto\n","Venus\n"),FILE_APPEND | LOCK_EX);

// -------------7.6-------------

echo PHP_EOL;
$filename3 = "E:/PHP/practice/7/data/file3.txt";
$students = array(
    array(
        'fname'=>'nikhil',
        'lname'=>'shadab',
        'age'=>13,
        'class'=>7,
        'Roll'=>11
    ),
    array(
        'fname' => 'Moon',
        'lname' => 'shadab',
        'age' => 11,
        'class' => 6,
        'Roll' => 11
    ),
    array(
        'fname' => 'Moon',
        'lname' => 'kabir',
        'age' => 12,
        'class' => 7,
        'Roll' => 13
    )
);
// ------------write Data-------------
// $fp = fopen($filename3, "w");
// foreach($students as $student){
//     $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp, $data);
// }
// fclose($fp);
// --------write data-----------
// $fp = fopen($filename3,"w");
// foreach($students as $student){
//     fputcsv($fp,$student);
// }
// fclose($fp);
// -----read data----------
// $fp = fopen($filename3,"r");
// while($student = fgetcsv($fp)){
//     printf("Name = %s %s,\nAge = %s,\nClass = %s,\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);
// ----------new data write--------
// $newStudent = array(
//     'fname' => 'md',
//     'lname' => 'kabir',
//     'age' => 12,
//     'class' => 7,
//     'Roll' => 17
// );
// $fp = fopen($filename3,"a");
//     fputcsv($fp,$newStudent);
// fclose($fp);
// ----------data remove--------
// $data = file($filename3);
// unset ($data[1]);
// print_r($data);
// $fp = fopen($filename3, "w");
// foreach($data as $line){
//     fwrite($fp, $line);
// }
// fclose($fp);

// -------------7.7-------------
// serialize data process kora

// -------------7.8-------------
// json data process kora