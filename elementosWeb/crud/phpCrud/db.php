<?php

	session_start();

	$conn = mysqli_connect(
		'localhost',
		'root',
		'',
		'crudphp',
		'3308'	
	);

	if(isset($conn)){
		//echo 'DB is connected';
	}else{
		echo 'dont';
	}

?>

<!--	$servername = "localhost";
$username = "root";
$password = "";
$db="crudPhp";
$port="1111";

// Create connection
$conn = new mysqli($servername, $username, $password,$db,$port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";-->