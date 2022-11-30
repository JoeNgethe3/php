<?php include "header.php"?>
<?php
    $x = 1;
    // while loop
    while($x <= 5){
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>";
    echo "===================================================";
    echo "<br>";
    // while loop

    $x = 0;

    while($x <= 100){
        echo "The number is: $x <br>";
        $x+=10;
    }
    echo "<br>";
    echo "===================================================";
    echo "<br>";
    // do while loop

    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<br>";
    echo "===================================================";
    echo "<br>";

    // for loop

    for ($x=0;$x<=10;$x++){
        echo "The number is: $x <br>";
    }
?>
<?php include "header.php"?>