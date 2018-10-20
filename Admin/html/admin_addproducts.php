<?php

if (isset($_POST['submit'])){

	include_once "connection.php";

	$product_name = mysqli_real_escape_string($connection, $_POST["product_name"]);
	
//check for errors
//check for empty fields
if(empty($product_name)){
	header("location: products.php?addProducts=empty");
	exit();
}
else{
	//check if input characterrs are valid
	if(preg_match("/^[0-9]*$/",$product_name)){
		header("location: index_admin.php.php?addProduct=invalid characters in location");
	exit();
	}
else{
		
				//insert user into the database
				$sql="INSERT INTO products(product_name) VALUES ('$product_name')";
				$result=mysqli_query($connection,$sql);
				header("location:products.php?addProducts=success");
				exit();
			
			}
		}
	}

	else{
	header("location: index_admin.php?addProducts=failed");
	exit();
	}	

?>