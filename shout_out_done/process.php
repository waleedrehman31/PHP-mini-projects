<?php 

	include 'database.php';

	//Check if form was submitted
	$submit = isset($_POST['submit']);
	if ($submit) {
		$user = mysqli_real_escape_string($connection, $_POST['name']);
		$message = mysqli_real_escape_string($connection, $_POST['message']);

		//Set timezone
		date_default_timezone_set("America/New_York");
		$time = date("h:1:a a", time());

		//Validate
		if ( $user == '' || $message == '') {
			$error = "Please fill in your name and message";
			header('Location: index.php?error='.urlencode($error));
			exit();
		} 
		else {
			$query = "INSERT INTO shouts ('user', 'message', 'time') 
					VALUES ('$user', '$message', '$time')";

			if (!mysqli_query($connection, $query)) {
				die("Error :".mysqli_error($connection) );
			} 
			else {
				header('Location: index.php');
				exit();
			}
		}
				
	}

 ?>