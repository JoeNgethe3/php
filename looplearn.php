<?php include "header.php" ?>

<?php
//while loop
//do-while loop
//for-loop
//switch
//if and elseif

echo "=============This is the while loop=============<br>"; 
/*The PHP while Loop
The while loop executes a block of code as long as the specified condition is true.

Syntax
while (condition is true) {
  code to be executed;
}*/
echo "=============This is the loop increment=============<br>"; 
 $x=1;

 while($x<=5){
    echo "The number is $x <br>";
    $x++;
 }
 echo "=============This is the loop decrement by 1=============<br>";

 $x=20;

 while($x>=0){
    echo "The number is $x <br>";
    $x--;
 }
 echo "=============This is the loop decrement by 5=============<br>";
 $y=20;
 while($y>=0){
    echo "The number is $y <br>";
    $y-=5;
 }
 echo "=============This is the loop modulus of 5=============<br>";
 $y=20;
 while($y%5==0 && $y>=0){
    echo "The number is $y <br>";
    $y-=5;
 }

 echo "=============This is do{execute;}while(condition);=============<br>";
$p=1;
do{
    echo "This is $p <br>";
    $p++;
}while($p<=5);

echo "=============This is for loop for(init;condition;dec/inc counter){code execute;}=============<br>";
for($i=0;$i<=10;$i++){
    echo "$i <br>";
}

echo "<br>";
echo "===============for loop decrement at intervals of 5 from 40 to 10===============================<br>";

for($i=40;$i>=10;$i-=5){
    echo "$i <br>";
}
echo "===============foreach loop==============================<br>";
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
/*foreach ($array as $value) {
  code to be executed;
}*/
$names=array("Jose","Paul","Ngethe","Lemaron");

foreach($names as $name){
    echo "$name <br>";
}
echo "================Array of cars========================== <br>";
$cars=array("Volvo","Mercedes","BMW","v8");
foreach($cars as $car){
    echo "$car <br>";
}
echo "================Switch========================== <br>";
$day="Monday";

switch($day){
    case "Sunday":
        echo "Today is $day";
        break;
    case "Monday":
        echo "Today is $day";
        break;
    case "Tuesday":
        echo "Today is $day";
        break;
    default:
        echo "No such day";
}



?>

<?php include "footer.php" ?>
