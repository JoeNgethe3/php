<?php include "header.php"; ?>
    <?php
        echo "=============pi, max and min, abs, sqrt,  are examples of php math================="; 
        echo "<br>";
        echo (pi());
        echo "<br>";
        echo (min(0,123,-345,67,-5000,3421));
        echo "<br>";
        echo (max(0,123,-345,67,-5000,3421));
        echo "<br>";
        echo (abs(-3));
        echo "<br>";
        echo (sqrt(67));
        echo "<br>";
        echo (rand(0,100));
        echo "<br>";
    ?>
    <?php
        //constants
        define("GREETINGS", "hello Fleming Tech");
        echo GREETINGS;
        echo "<br>";
        //CONSTANT arrays
        define("cars",[
            "Volvo",
            "Mercedes",
            "BMW"
        ]);
        echo cars[1];
    ?>

<?php include "footer.php"; ?>