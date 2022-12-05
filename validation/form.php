<?php include "../header.php" ?>
<h1>This is form validation</h1>
<?php //define variables and set them to empty
$fname=$email=$gender=$number=$comment=$age=$image="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=test_input($_POST["fname"]);
    $email=test_input($_POST["email"]);
    $number=test_input($_POST["number"]);
    $gender=test_input($_POST["gender"]);
    $age=test_input($_POST["age"]);
    $image=test_input($_POST["image"]);
    $comment=test_input($_POST["comment"]);
}

function test_input($data){ 
    //define the input funtion by calling
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">Full Name</label> <br>
    <input type="text" name="fname" id="fname"> <br>
    <label for="email">Email</label> <br>
    <input type="email" name="email" id="email"> <br>
    <label for="number">Phone Number</label> <br>
    <input type="text" name="number" id="number"> <br>
    <label for=""> Select image:</label>  
    <input type="file" name="image"/>  <br>
    <label for="gender">Gender</label> <br>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">female</option>
        <option value="Other">Other</option>
        <!--
        <input type="radio" name="gender" id="gender"> Male <br>
        <input type="radio" name="gender" id="gender"> female <br>
        <input type="radio" name="gender" id="gender"> Other <br>-->
    </select> <br>
    <label for="age">Age</label> <br>
    <input type="number" name="age" id="age"> <br>
    <label for="comment">Comment</label> <br>
    <textarea name="comment" id="" cols="30" rows="5"></textarea> <br>
    <input type="submit" value="Submit">

</form>
<?php
echo "<h2> Your input is: </h2> <br>";
echo "Name:  $fname  <br>" ;
echo "Email:  $email  <br>" ;
echo "Phone Number:  $number  <br>" ;
echo "Gender:  $gender  <br>" ;
echo "Picture: $image <br>";   
echo "Age:  $age  <br>" ;
echo "Comment:  $comment  <br>" ;
?>

<?php include "../footer.php" ?>