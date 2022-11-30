<?php

	if($_SERVER['REQUEST_METHOD'] == "post"){
		if(empty($_POST['username'])){
			$username_error = "Please enter the username";
		}
		 
		if(empty($_POST['password'])){
			$password_error = "Please enter the password";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="30">
    <link rel="stylesheet" href="styles.css">
    <title>Form validation in php</title>
</head>
<body>
	<form method="post" action="" auto_complete="on">
	<input type="text" name="username" id="username">
	<span><?php if(isset($username_error)) echo $username_error; ?></span>
	<input type="password" name="password" id="password">
	<span><?php if(isset($password_error)) echo $password_error; ?></span>
	<input type="submit" value="Register">
		
	<form>


</body>
</html>