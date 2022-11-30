<?php include "header.php"?>
<?php
    //if statement
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }
    echo "<br>";
    echo "=====================================";
    echo "<br>";
    //if ... else statement
    if ($t < "20") {
        echo "Have a good day!";
    } else{
        echo "Have a good night!";
    }
    echo "<br>";
    echo "=====================================";
    echo "<br>";
    // if ... elseif ... else statement
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20"){
        echo "Have a good day!";
    } else{
        echo "Have a good night!";
    }

    echo "<br>";
    echo "=====================================";
    echo "<br>";

    //switch statement
    $favcolor = "red";
    switch  ($favcolor){
        case "red":
            echo "Your favourite color is red!";
            break;
        case "red":
            echo "Your favourite color is blue!";
            break;
        case "green":
            echo "Your favourite color is green!";
            break;
        default:
            echo "Your favourite color is neither red blue or green!";
    }




?>
<?php include "footer.php"?>

