<?php
//configuration database
$host = "localhost";
$dbname = "db_pi";
$username = "root";
$password = "";

try{
	// create new PDO object and save to $conn variable
	$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	//set the PDO error mode to exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
}
?>