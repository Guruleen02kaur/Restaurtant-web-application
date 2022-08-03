<?php
// session starts 
session_start(); 

//Create constrant to store non repeating value
define('SITEURL','http://localhost/Restaurtant/');
define('LOCALHOST','127.0.0.1');
define('DB_USERNAME','DATABASE');
define('DB_PASSWORD','G@leen321');
define('DB_NAME','food-order');

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); // Database connection

$db_select = mysqli_select_db($conn, DB_NAME) or die (mysqli_error());//Selecting database

?>