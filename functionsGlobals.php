<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Globals</title>
</head>
<body>

<?php
$x=5;
$y=10;
echo "============================================== <br>";
echo "Use of GLOBAL Variables<br>";
function myTest(){
    $GLOBALS['z']=$GLOBALS['y']+$GLOBALS['x'];
    echo $GLOBALS['z'];

}
myTest();
echo "<br>";

echo "==============================================<br>";
echo "Use of Static Variables<br>";

function testStatic(){
    static $a=4;
    echo "$a";
    $a++;
}
testStatic();
echo "<br>";
testStatic();
echo "<br>";
testStatic();
echo "<br>";

echo "==============================================<br>";
echo "Use of Data Types<br>";
$greetings="Hello PHP users";
$year= 2023;
$myFloat=10.867;
$names=array("Jose", "Lema","Steve");
 
echo " $greetings welcome to the year $year <br> ";
var_dump($greetings); echo "<br>"; //var_dump gives the datatype
var_dump($year); echo "<br>";
var_dump($myFloat); echo "<br>";
var_dump($names); echo "<br>";





?>
    
</body>
</html>