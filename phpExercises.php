<?php include "header.php" ?>
<?php
echo "TASK1:Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line <br>";

for($i=1;$i<=10;$i++){
    if($i<10){
        echo "$i-";
    }
    elseif($i==10){
        echo "$i <br>";
    }

}
echo "TASK2:Create a script using a for loop to add all the integers between 0 and 30 and display the total. <br>";
$sum=0;
for($i=0;$i<=30;$i++){
    $sum +=$i;
}
echo "The sum of the numbers 0 to 30 is $sum <br>";

echo "TASK3:. <br>";

for($i=1;$i<=5;$i++){
    //echo "$i <br>";
    for($y=1; $y<=$i;$y++){
       // echo "$y <br>";
    }
    echo "*";
    if($y< $i){
        echo " <br>";
    }
}
    echo "* <br>";
    echo "** <br>";
    echo "*** <br>";
    echo "**** <br>";
    echo "***** <br>";

    echo "===The factorial of a number===== <br>";
    $n=4;
    $i=1;
    for($i=1;$i<=$n;$i++){
        $n *=($i+1);
    }
    echo "The factorial of a number is $n =$x <br>";


$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x";
?>


<?php include "footer.php" ?>