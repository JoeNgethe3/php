<?php declare(strict_types=1); ?>
<?php include "header.php" ?>
<?php
    echo "=========================phpStrictDeclaration=====================================<br>";
    
    function addNumbers(int $a, int $b){
        return $a + $b;
    }
    echo addNumbers(5, 10);
    echo "<br>";

    function message(){
        echo "Hello World!";
    }
    message();
    echo "<br>";
    

    //family name
    //defining arguments and parameters

    function firstName($fname){
        echo "$fname Refsnes";
        echo "<br>";
    }
    
    firstName("Lemaa");
    firstName("Steve");
    firstName("Angela");
    firstName("Candie");


    function grades($name, $regNo, $maths, $science){
        echo "Hello $name of registration number $regNo, below are your grades: <br>";
        echo " $maths and $science <br>";
        
    }
    grades("Lema","FIC002/2022","A","B");
    grades("John","FIC0028/222","B","A");

    echo "======Events Planning=======<br>";

    function eventsPlan($name,$eventDate,$amount,$payDate,$phoneNo,$mpesaCode){
        echo "Dear $name, your confirmed booking date is $eventDate <br>";
        echo "and your total cost is Ksh $amount. <br>";
        echo "Please clear the charges by $payDate through <br>";
        echo "$phoneNo with Mpesa reference code $mpesaCode.<br>";
    }
    eventsPlan("John","2nd Jan 2023","120000","3rd Feb 2023","0708996835","BNSXVY0UY");



?>
<?php 
        echo "=============Strict_Types for data types===============<br>";
        function numbersAdd(int $a, int $b){
            $z=$a+$b;
            return $z;
        }
        echo "5+10 = " .numbersAdd(5,10);
?>

<?php include "footer.php" ?>