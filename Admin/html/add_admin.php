<?php

if (isset($_POST['add'])){

	include_once "connection.php";

	$firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
	$lastname = mysqli_real_escape_string($connection, $_POST["lastname"]);
	$email = mysqli_real_escape_string($connection, $_POST["email"]);
	$gender = mysqli_real_escape_string($connection, $_POST["gender"]);
	$country = mysqli_real_escape_string($connection, $_POST["country"]);
	$dob = mysqli_real_escape_string($connection, $_POST["dob"]);
	$password = mysqli_real_escape_string($connection, $_POST["password"]);
//check for errors
//check for empty fields
if(empty($firstname)||empty($lastname)||empty($email)||empty($gender)||empty($country)||empty($dob)||empty($password) ){
	header("location: index.php?register=empty");
	exit();
}
else{
	//check if input characterrs are valid
	if(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)|| !preg_match("/^[a-zA-Z]*$/",$lastname)){
		header("location: index.php?signup=invalid characters in firstname or lastname");
	exit();
	}
	else{
		//check if email is valid
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("location: index.php?register=invalid email");
	exit();
		}
		else{
			$sql="SELECT * FROM users WHERE firstname='$firstname'";
			$result=mysqli_query($connection,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck>0){
				header("location: index.php?signup=username_Admin taken");
	exit();
			}else{
				//hasshing the password
				$hashPassword=password_hash($password,PASSWORD_DEFAULT);
				//insert user into the database
				$sql="INSERT INTO users (firstname,lastname,email,gender,country,dob,password,access_level) VALUES ('$firstname', '$lastname', '$email','$gender','$country','$dob','$hashPassword',2)";
				$result=mysqli_query($connection,$sql);
				header("location: admin_solutions.php?registerAdmin=success");
				exit();
			}
		}
	}
}
}

	else{
	header("location: admin_solutions.php");
	exit();
	}	
?>