<?php include "header.php" ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="fname">Name</label>
    <input type="text" name="fname" id="fname">
    <br>
    <input type="submit" value="Submit">
</form>
    <?php
        $x=75;
        $y=35;

        function addition(){
            $GLOBALS['z']= $GLOBALS['x']+$GLOBALS['y']; 
        }
        addition();
        echo $z;

        //$_SERVER is a PHP super global variable
        // which holds information about headers, 
        //paths, and script locations.
        echo "<br>";
        echo $_SERVER['PHP_SELF'];//	Returns the filename of the currently executing script
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];//Returns the name of the host server
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];//Returns the Host header from the current request
        echo "<br>";
        //$_SERVER['HTTP_REFERER'];//returns the complete URL
        echo $_SERVER['SERVER_PORT'];
        echo "<br>";

        //PHP $_REQUEST is a PHP super global variable which is 
        //used to collect data after submitting an HTML form.

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name= $_REQUEST['fname'];
            if(empty($name)){
                echo "Name is empty";
            }else{
                echo $name;
            }
        }
        echo "<br>";


    ?>


<?php include "footer.php" ?>