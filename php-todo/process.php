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

	if (isset($_POST['delete'])) {
		$id = $_POST['id'];
		$query = "DELETE FROM todos  WHERE id=$id";
		$delete = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if ($delete) {
			$message = "Todo Deleted";
			header('Location: index.php?message='.urlencode($message));
		};
	};

	if (isset($_POST['complete'])) {
		$id = $_POST['id'];
		$query = "UPDATE todos SET is_complete=1 WHERE id=$id ";
		$comlete = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if ($comlete) {
			$message = "Todo Is Completed";
			header('Location: index.php?message='.urlencode($message));
		};
	}

 ?>