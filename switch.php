<?php include "header.php" ?>
<?php
//switch statement
$food= "rice";
$bill= 250;

switch($food){
    case "Lasagnia":
        echo "Your food is $food and the bill is $bill";
        break;
    case "Thufu":
        echo "Your food is $food and the bill is $bill";
        break;
    case "rice":
        echo "Your food is $food and the bill is $bill";
        break;
    default:
        echo "No food fit for you";
}


?>

<?php include "footer.php" ?>