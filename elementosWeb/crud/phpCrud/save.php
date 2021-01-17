<?php 

	include("db.php");

	if(isset($_POST['saved'])){
		$title = $_POST['title'];
		$description = $_POST['description'];

		/*echo "$title";
		echo "$description";*/

		$query = "INSERT INTO taskcrud ( title, description) VALUES ('$title', '$description')";
		$result = mysqli_query($conn, $query);

		if(!$result){
			die("Query failed");
		}

		$_SESSION['message'] = 'Task Saved succesfully';
		$_SESSION['message_type'] = 'success';

		header("Location: index.php");
	}



 ?>