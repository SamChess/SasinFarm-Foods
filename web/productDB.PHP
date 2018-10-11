<?php
	include_once "connection.php";
	$sql = "SELECT product_name FROM products";
$result = mysqli_query($connection, $sql);
echo"successful";

?>