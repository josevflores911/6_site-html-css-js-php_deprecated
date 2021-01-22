<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbkey = "";
	$dbname = "uploadimage";
	$dbport = "3308"; 

	$db = new mysqli($dbhost,$dbuser,$dbkey,$dbname,$dbport);

	if ($db->connect_error){
		die("Connection failed: " . $db->connect_error);
	}
 ?>