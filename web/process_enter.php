<?php
session_start();

if (isset($_POST['submit'])){
include_once "connection.php";
// Escape user inputs for security
$firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
if(empty($firstname) || empty($password)){
header("location: index.php?login=empty");
exit();
} else{
$sql="SELECT * FROM users WHERE firstname='$firstname'";
$result=mysqli_query($connection,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1){
header("location: index.php?login=error");
exit();
}else{
if($row=mysqli_fetch_assoc($result)){
//De-hashing the password
$hashPasswordCheck=password_hash($password,PASSWORD_DEFAULT);
$hashedPasswordCheck=password_verify($password,$row['password']);
if( $hashedPasswordCheck==false){
header("location: index.php?login=errorPassword");
exit();
}else if( $hashedPasswordCheck==true){
if($row["access_level"] == 1)
{
$redirect=true;
$_SESSION['user_firstname']=$row['firstname'];
header("location: ../Admin/html/index_admin.php?log in success");
} else{
//log in the user
$id = $row['id'];
$_SESSION['user_id']=$row['id'];
$_SESSION['user_firstname']=$row['firstname'];
$_SESSION['user_lastname']=$row['lastname'];
$_SESSION['user_email']=$row['email'];
$_SESSION['user_gender']=$row['gender'];
$_SESSION['user_dob']=$row['dob'];
echo 'Hi, ' . $_SESSION["user_firstname"] . ' ' . $_SESSION["user_lastname"];
header("location: user_page.php?login=success");
exit();
}
}
}
}
}
}
else{
header("location: index.php?login=error");
exit();
}
?>