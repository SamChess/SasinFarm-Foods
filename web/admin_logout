<?php 
	session_start();
	session_unset();
	unset($_SESSION['user_firstname']);
	unset($_SESSION['user_lastname']);
	session_destroy();
	header('Location: index.php');
?>