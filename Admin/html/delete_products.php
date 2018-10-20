<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sasin'; // Database Name
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$connection) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if(isset($_GET['id'])){
			$delete_id=$_GET['id'];
			$sql="DELETE FROM products WHERE id='$delete_id'";
            $result=mysqli_query($connection,$sql);
			if($result){
            header("location: products.php?delete=successful");
		}else{
		echo"unssuccessful";
	}
}
?>