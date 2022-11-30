<?php include "header.php"?>
<?php
$grade = "A";

switch($grade){
    case "A":
        echo "Excellent your grade is $grade <br>";
        break;
    case "B":
        echo "Good your grade is $grade <br>";
        break;
    case "C":
        echo "Failed your grade is $grade <br>";
        break;
    default:
        echo "no grade assigned! Repeat!";
}



?>
<?php include "footer.php"?>

