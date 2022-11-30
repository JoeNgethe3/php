<?php include "header.php"?>
<?php
    echo "An array stores multiple values in one single variable <br>";
    echo "============================phpArrays============================<br>";
    $cars = array("Volvo","BMW","Toyota");
    echo "I like " .$cars[0].", " .$cars[1]." and " .$cars[2].".<br>";
    echo count($cars);
    echo "<br>";

    echo "============================count()function counts length of a string============================<br>";
    $names = array("Jose","Paul","Lemaron");
    echo count($names);

    echo "<br>============================loopThroughAnIndexedArray============================<br>";
    $cars = array("Volvo","BMW","Toyota");
    $arrlength = count($cars);
    for($x = 0;$x < $arrlength;$x++){
    echo $cars[$x];
    echo "<br>"; 


}

?>
<?php
    echo "======Associative Arrays==============<br>";
    echo "======Associative arrays are arrays that use named keys that you assign to them==============<br>";
    $playersNo= array("Christiano"=>"7","Benzema"=>"11","Messi"=>"30"); //declaration and initialization
    echo "Christiano has Jersey Number " .$playersNo["Christiano"] ."<br> while Benzema has Jersey number " .$playersNo["Benzema"] ."<br> while Messi has Jersey number " .$playersNo["Messi"] ;
    echo "======foreach loop in Associative Arrays==============<br>";
    foreach($playersNo as $x => $x_value){
        echo "Player Name is ".$x. ", player number ".$x_value;
        echo "<br>"; 
    }

    echo "=========PHP - Multidimensional Arrays=========<br>";
    echo "=======A multidimensional array is an array containing one or more arrays===<br>";
    $cars= array(
        array("Volvo", 22,18),
        array("BMS", 15,13),
        array("Mercedes", 5,2),
        array("Land Rover", 15,10),
    );

    for($rows=0;$rows<4;$rows++){
        echo "<p> <b>Row Number $rows</b> </p>";
        echo "<ul>";
        for($col=0;$col<3;$col++){
            echo "<li>" .$cars[$rows][$col].  "</li>";
        }

        echo "</ul>";
    }
?>
<?php include "footer.php"?>
