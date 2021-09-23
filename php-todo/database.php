<?php 

//Create Connection Crendentials
	$db_host = "localhost";
	$db_username =  'root';
	$db_password = '';
	$db_name = "php-todo";

//Create MYSQLI Object
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

//Test connection
	if ($mysqli->connect_error) {
		printf("Connection Failed %s\n", $mysqli->connect_error);
		exit();
	}

 ?>