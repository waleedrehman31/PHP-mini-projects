<?php 
	include 'database.php'; 

	if (isset($_POST['add'])) {
		$todo = $_POST['todo'];

		/*
		* POST TODO
		*/ 
		$query = "INSERT INTO todos (text) VALUES ('$todo')";
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if ($insert_row) {
			$message = "Todo Is Added";
			header('Location: index.php?message='.urlencode($message));
		};
	};

 ?>