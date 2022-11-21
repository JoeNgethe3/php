<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php
        $x="Hello Jose";
        $y="You are Good";
        $z="Welcome to Fleming";

        echo "$x, $y";
        echo "<br>";
        var_dump($x);

        $names=array("Fleming","Kitengela","Taaluma", 7 );
        echo "<br>";
        var_dump($names);

        //php string functions 
        // functions used to manipulate strings
        //length of a string
        echo "<br>";
        echo strlen($x);
        echo "<br>";
        echo str_word_count($y);
        echo "<br>";
        echo strrev($x);
        echo "<br>";
        echo strrev($z);
        // string replace
        echo "<br>";
        echo str_replace("Welcome", "GoodBye", $z);
        echo "<br>";
        


        $a= 6789;
        $b=67.89;
        $k=1.9e411;
        var_dump(is_float($a));
        echo "<br>";
        var_dump(is_float($b));
        echo "<br>";
        var_dump($k);
        echo "<br>";

        $p = "59.85" + 100;

        var_dump(is_numeric($p));
        echo "<br>";
        echo $a**2;



    ?>
</body>
</html>