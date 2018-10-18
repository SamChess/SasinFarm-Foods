<?php
session_start();

if (isset($_POST['submit'])){
include_once "connection.php";
// Escape user inputs for security
$weight = mysqli_real_escape_string($connection, $_POST["weight"]);
$due_date = mysqli_real_escape_string($connection, $_POST["due_date"]);
if(empty($weight) || empty($due_date)){
header("location: order_products.php?order=empty");
exit();
}else{
date_default_timezone_set("Africa/Nairobi");
 if($due_date <  date("H:i:s")){
 header("location: order_products.php?date=error");
exit();
 }
}
}else
{
$sql="INSERT INTO orders (product) VALUES ('$product')";
header("location: order_products.php?order=successful");
exit();
}

?>