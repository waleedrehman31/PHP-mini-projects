<?php include 'database.php'; ?>
<?php 
	
	/*
	* POST TODO
	*/ 
	$query = "SELECT * FROM todos";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	

	if (isset($_POST['add'])) {
		$todo = $_POST['todo'];

		/*
		* POST TODO
		*/ 
		$query = "INSERT INTO todos (text) VALUES ('$todo')";
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if ($insert_row) {
			$message = "Todo Is Added";
		};
	};
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home - TODO PHP</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header class="container">
		<h1>TODO</h1>
	</header>
	<main>
		<div class="container">
			<div class="form-section">
				<form method="POST" action="index.php">
					<?php if (isset($message)) {
						echo "<div class=\"message\">".$message."</div>";
					} ?>
					<input type="text" name="todo" placeholder="write your todo here...." />
					<input type="submit" name="add" value="Add Todo" />
				</form>
			</div>
			<div>
				<h1>Your TODOs</h1>
				<ul>
					<?php while ($todo = $result->fetch_assoc()) : ?>
						<li>
							<span><?php echo $todo['text'] ?></span>
							<form>
								<input type="submit" name="complete" value="Done" />
								<input type="submit" name="delete" value="Delete" />
							</form>
						</li>
					<?php endwhile ?>
				</ul>
			</div>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2021 PHP TODO
		</div>
	</footer>
</body>
</html>