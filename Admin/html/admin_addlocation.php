<?php

if (isset($_POST['submit'])){

	include_once "connection.php";

	$location_name = mysqli_real_escape_string($connection, $_POST["location_name"]);
	
//check for errors
//check for empty fields
if(empty($location_name)){
	header("location: locations.php?addLocation=empty");
	exit();
}
else{
	//check if input characterrs are valid
	if(preg_match("/^[0-9]*$/",$location_name)){
		header("location: index_admin.php.php?addLocation=invalid characters in location");
	exit();
	}
else{
		
				//insert user into the database
				$sql="INSERT INTO location(location_name) VALUES ('$location_name')";
				$result=mysqli_query($connection,$sql);
				header("location:locations.php?addLocation=success");
				exit();
			
			}
		}
	}

	else{
	header("location: index_admin.php?failed=failed");
	exit();
	}	
	echo"haufgsyfbhsafb";
?>