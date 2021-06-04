<?php
error_reporting( E_ALL );
	ini_set("display_errors", "off");
$host = "localhost"; /* Host name */
$user = "admin"; /* User */
$password = "admin"; /* Password */
$dbname = "ak_distributors"; /* Database name */
$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) 
 die("Connection failed: " . mysqli_connect_error());
 ?>