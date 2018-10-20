<?php

$connection = new mysqli("localhost", "root", "", "sasin");

// Check connection
if($connection === false){
die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>