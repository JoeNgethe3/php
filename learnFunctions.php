<?php include "header.php"?>
<?php
    $array = array(12.5, 'fox','bear','deer','cat', 100, 'dog','elephant','wolf');
    $vowels = array("a","e","i","o","u","A","E","I","O","U");
    $merged_array = array_merge($array,$vowels);
    //print_r($merged_array);
    //die;
    $glued = implode(", ",$array);
    //echo strlen($glued);
    //die;
    $text = "red, orange, black, white, cyan, teal, purple, pink";
    echo strpos($text, 'black');
    die;
    $columns = "bob|nancy|rachel|molly|victoria";
    $vowels = array("a","e","i","o","u","A","E","I","O","U");
    $text = "clever tech is awesome, I love your videos!";
    echo str_replace($vowels,"",$text);



?>
<?php include "footer.php"?>