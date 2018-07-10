<?php
define ("DB_SERVER", "173.194.224.60");
define ("DB_USER", "axel");
define ("DB_PASSWORD", "lol");
define ("DB_NAME", "menu");

//Create a database connection & Select a database to use
$con = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

//Check connection
if ($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}else{
	//echo "Connected successfully";
}

?>
