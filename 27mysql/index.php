<!-- list theke randomly data select kore update  -->
UPDATE moon
SET class = CEIL(RAND()*10),
section = (SELECT ELT(CEIL(RAND()*4),'A','B','C','D'))
<!-- list e table column er value increment kora -->
SET @roll=0;
UPDATE moon SET roll=@roll:=@roll+1 WHERE class=1 
AND section='B'
<!-- check -->
SELECT * FROM `moon` WHERE class=1 AND section='A'
<!-- php diye increment -->
first e config file
then connection
<?php
// $queries = [];
// for ($class=1; $class <=10; $class++) { 
//     foreach(['A','B','C','D'] as $section){
//         $queries[]="SET @roll=0;
//         UPDATE moon SET roll=@roll:=@roll+1 WHERE class={$class} 
//         AND section={$section}";
//     }
// }
// $result = mysqli_multi_query($conn,join('',$queries));
// if(mysqli_error($conn)){
//     echo mysqli_error($conn);
// }
?>
<!-- crate a new table like a old table -->
create table newtable(new table name) like moon(old table name)
<!-- data insert into new table -->
Insert into newtable(table name) select * from moon(copy table name)
<!-- php diye full data insert kora 27.10  -->

<?php
define("DB_HOST","127.0.0.1"); 
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","moon");
$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$stmt = $mysqli->prepare("INSERT INTO students(name,sex,class,section,roll) values(?,?,?,?);");
$name = '';
$sex = '';
$class = '';
$section = '';
$roll = '';
$stmt->bind_param('ssisi', $name, $sex, $class, $section, $roll);
$csv_data = array_map('str_getcsv', file('babynames-clean.csv'));
shuffle($csv_data);
$_students = array();
$section = array('A','B','C','D');
for($i =0;$i<10;$i++){
    $name = $csv_data[$i][0];
    $sex = $csv_data[$i][1] == 'boy'? "M" : "F";
    $class = rand(1,10);
    $section = $section[array_rand($section)];
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);
    printf("%s:%s:%s:%s:%s\n",$name,$sex,$class,$section,$roll);
    $stmt->execute();
}