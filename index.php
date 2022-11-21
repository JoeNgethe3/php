<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="refresh" content="30s"  >
    <link rel="stylesheet" href="style.css">
    <title>Learning PHP</title>
</head>
<body>
    
    <?php
    /*PHP commands such as echo are not case sensitive
    recommended to always use the small letters*/
    echo "This is php <br>"; 
    EcHo "This is mixed up <br>"; 
    ECHO "All caps <br>"; 
    
    echo '======================================== <br>';
    //variables
    $age=21;
    $name="Jose";
    $x=6; //global variable
    $y=7;
    
    

    echo " my name is $name and i am $age years old <br>";
    echo $x + $y ; echo "<br>";
    echo '$x + $y <br>';

    function myTest(){
        $x=9; //local variable
        //global $x; can be used within a function
        echo "<p> Variable x inside a function is: $x </p>";
    }
    myTest(); 
    
    echo "Variable x inside a function is:$x";



    ?>



</body>
</html>