<?php include "../header.php" ?>
<?php //define variables and set them to empty
$fname=$lname=$email=$gender=$regNo=$number=$course=$image="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=studentData($_POST["fname"]);
    $lname=studentData($_POST["lname"]);
    $email=studentData($_POST["email"]);
    $number=studentData($_POST["number"]);
    $regNo=studentData($_POST["regNo"]);
    $image=studentData($_POST["image"]);
    $gender=studentData($_POST["gender"]);
    $course=studentData($_POST["course"]);
    
}

function studentData($data){ 
    //define the input funtion by calling
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">First Name:</label> <br>
    <input type="text" name="fname" id="fname"> <br>
    <label for="lname">Last Name:</label> <br>
    <input type="text" name="lname" id="lname"> <br>
    <label for="regNo">Reg Number:</label> <br>
    <input type="text" name="regNo" id="regNo"> <br>
    <label for="image"> Select image:</label>  
    <input type="file" name="image"/>  <br>
    <label for="email">Email:</label> <br>
    <input type="email" name="email" id="email"> <br>
    <label for="number">Phone Number:</label> <br>
    <input type="text" name="number" id="number"> <br>
    <label for="gender"> Gender</label> <br>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select> <br>
    <label for="course">Courses</label> <br>
    <!--<select name="course" id="course">
        <option value="arts">Arts</option>
        <option value="science">Science</option>
        <option value="languages">Languages</option>
    </select>-->
    <select name="course" id="course">
        <optgroup label="arts">
            <option value="fineArts">Fine Arts</option>
            <option value="dance">Dance</option>
        </optgroup>
        <optgroup label="science">
            <option value="cs">Computer Science</option>
            <option value="asc">ASC</option>
        </optgroup>
</select>
    <input type="submit" value="Submit">

    
</form>
<?php
echo "<h2> Your input is: </h2> <br>";
echo "First Name:  $fname  <br>" ;
echo "Last Name:  $lname  <br>" ;
echo "Email:  $email  <br>" ;
echo "Phone Number:  $number  <br>" ;
echo "Gender:  $gender  <br>" ;
echo "Picture: $image <br>";   
echo "Reg NO:  $regNo  <br>" ;
echo "Course:  $course  <br>" ;
?>

<?php include "../footer.php" ?>