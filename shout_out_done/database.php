<?php 
	//Connect to mysql
	
	$db_host = "localhost";
	$db_username =  'root';
	$db_password = '';
	$db_name = "shoutout";
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	//Test connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect MYSQL", mysqli_connect_error();
	}

 ?>