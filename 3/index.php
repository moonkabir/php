<?php 
// ------------3.1-----------
// array poriciti
$students = array(
    "rahim",
    "KARIM",
    123,
);
echo $students[1];
var_dump($students);
echo count($students);
$n=count($students);
echo PHP_EOL;
for( $i=0; $i<$n ; $i++){
    echo $students[$i]."\n";
}

// ------------3.2-----------
// array manupulation
// array_pop($students)  sobar last er element ta delete kore 
// array_shift($students) sobar first er element ta delete kore
// $students[]="jamal";//sobar last e element add kore
// array_push($students,"kamal");//sobar last e element add kore
// array_unshift($students,"kamal");//sobar first e element add kore

// ------------3.3-----------
// assosiative array

$students = [
    '12'=>'hasan',
    '13'=>'karim',
    'abc'=>'jobbar',
];
echo $students[12];
echo PHP_EOL;
echo $students['abc'];
echo PHP_EOL;
$foods = [
    'vegetables' => 'carot, brocolly, brinjal, capsicum',
    'fruit' => 'mango, banana, jackfruit, orange',
    'drinks' => 'juice, water, milk',
];
foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}



// ------------3.4-----------
// convert string to array
$vegetables = ('carot, brocolly,brinjal,capsicum,potato,onoin,ginger,sweet-potato');
$vegetables_array = preg_split('/(, |,)/',$vegetables);
// delemeter 
// var_dump($vegetables_array);
// echo $vegetables_array;
print_r($vegetables_array);
echo count($vegetables_array);
echo PHP_EOL;
$vegetables_string = join(', ',$vegetables_array);
echo $vegetables_string;

// -------------3.5-------------
// multidimensional array

$foods = [
    'vegetables' => explode(', ','carot, brocolly, brinjal, capsicum'),
    'fruit' => explode(', ','mango, banana, jackfruit, orange'),
    'drinks' => explode(', ','juice, water, milk'),
];
array_push($foods['drinks'],"orange juice");
print_r($foods);
echo $foods ['drinks'][2];
echo PHP_EOL;
// -------------3.6-------------
// array to string conversion
$student = [
    'fname'=>'hasan',
    'lname'=>'karim',
    'age'=>12,
    'class'=>8,
    'section'=>'B',
];

$serialize = serialize($student);
echo $serialize;
echo PHP_EOL;

$newStudent = unserialize($serialize);
print_r($newStudent);
echo PHP_EOL;

$jsonData = json_encode($student);
echo $jsonData;
echo PHP_EOL;
$jsonConvertObj = json_decode($jsonData);
print_r($jsonConvertObj);
echo PHP_EOL;
// php jokon  json data return kore aita data ke object e return kore
 
$jsonConvertarray = json_decode($jsonData,true);
print_r($jsonConvertarray);
echo PHP_EOL;
// -------------3.7--------------
echo "copy by value \n";
// copy by value/deep copy
$person = array('fname'=>'hellow','lname'=>'world');
$newperson = $person;
$newperson['lname']='pluto';
print_r($person);
print_r($newperson);
echo PHP_EOL;
// copy by refferences/shallow copy
echo "copy by refferences \n";
$person1 = array('fname'=>'hellow','lname'=>'world');
$newperson1 = &$person1;
$newperson1['lname']='pluto';
print_r($person1);
print_r($newperson1);
echo PHP_EOL;

// -------------3.8--------------
// array theke data remove
unset($student['age']);
print_r($student);

// -------------3.9--------------
// empty value
$name = '';
if(isset($name) && (is_numeric($name)|| $name !='')){
    echo "name is set and it isn't empty";
}else{
    echo "Name is either not set or it's empty";
}

// -------------3.10--------------
// array slice

$fruits = array('mango', 'banana', 'jackfruit', 'orange','plum','dates');
// $someFruits = array_slice($fruits,2);
// $someFruits = array_slice($fruits,2,2);
//  $someFruits = array_slice($fruits,-5,-1);
 $someFruits = array_slice($fruits,3,3,true);
print_r($someFruits);

// -------------3.10--------------
// array splice slice er motoi same kaj kore 
// splice e main arry theke data ber hoyee ase
$fruits = array('mango', 'banana', 'jackfruit', 'orange','plum','dates');
$someFruits = array_splice($fruits,2,2,$student);
print_r($someFruits);
print_r($fruits);

// -------------3.12--------------
// array merge kora;
echo "array merge\n";
 $someFruits1 = array_slice($fruits,0,3);
 $someFruits2 = array_slice($fruits,3);
 $someFruits3 = array_slice($fruits,3,null,true);
 $newFruits = array_merge($someFruits1,$someFruits2);
 print_r($someFruits1);
 print_r($someFruits2);
 print_r($someFruits3);
 print_r($newFruits);
 $newFruitsPlus = $someFruits1 + $someFruits3;
//  + sign diye array add korte hoile index er change thakete hobe
 print_r($newFruitsPlus);

// -------------3.12--------------
// array sort kora;
echo "array sort\n";
$fruitsSort = array('a'=>'mango','b'=>'banana', 'jackfruit', 'orange','plum','dates');
asort($fruitsSort);//asort e index gula ke preserve kore but sort hoy value er upor
print_r($fruitsSort);

// alphabet er index age thekei hoy
$numbers = array(778,11,22,34,3,2,2,55,777,'f','G','AABGK');
// sort($numbers);//normal sort
// asort($numbers);//assending sort
// rsort($numbers);//reverse sort
// ksort($numbers);//key base sort
// krsort($numbers);//key reverse base sort
// sort($numbers,SORT_STRING);//sting base sort
print_r($numbers);
// sort er index er upor array print hoice
for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i] . "\n";
}
echo PHP_EOL;
// asort er upor array print hoice
foreach($numbers as $number){
    echo $number . "\n";
}
