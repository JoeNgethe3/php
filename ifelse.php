<?php include "header.php" ?>
<?php
$choice1= "samaki";
$choice2= "lasagnia";
$choice3= "Thufu";
$bill= 350;


if($bill=200){
    echo "You chose $choice1 and your bill is $bill"; 
}elseif($bill>250 && $bill<500){
    echo "You chose $choice2 and your bill is $bill"; 
}else{
    echo "Kula tu $choice3";
}


?>

<?php include "footer.php" ?>