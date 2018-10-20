<?php 
	session_start();
	session_unset();
	unset($_SESSION['user_firstname']);
	session_destroy();
	 header("location: ../../web/index.php?logout succesful");
?>