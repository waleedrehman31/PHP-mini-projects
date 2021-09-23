<?php include 'database.php'; ?>
<?php 
	
	/*
	* GET TODO
	*/ 
	$query = "SELECT * FROM todos";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	
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
				<form method="POST" action="process.php">
					<input type="text" name="todo" placeholder="write your todo here...." />
					<input type="submit" name="add" value="Todo is Added" />
					<?php if (isset($_GET['message'])) : ?>
						<p><?php echo $_GET['message'] ?></p>
					<?php endif ?>
				</form>
			</div>
			<div>
				<h1>Pending TODOs</h1>
				<ul>
					<?php while ($todo = $result->fetch_assoc()) : ?>
						<?php if ($todo['is_complete'] == 0 ) : ?>
							<li>

								<strong><span><?php echo $todo['text'] ?></span></strong>
								<span class="time"><?php echo $todo['time'] ?></span>
								<form method="POST" action="process.php">
									<input type="submit" name="complete" value="Done" />
									<input type="hidden" name="id" value="<?php echo $todo['id'] ?>">
									<input type="submit" name="delete" value="Delete" />
								</form>
							</li>
						<?php endif ?>
					<?php endwhile ?>
					<h1>Complete TODOs</h1>
					<?php while ($todos = $result->fetch_assoc()) : ?>
						<?php  if ($complete) : ?>
							<li>
								<strong><span><?php echo $todos['text'] ?></span></strong>
								<span class="time"><?php echo $todos['time'] ?></span>
								<form method="POST" action="process.php">
									<input type="hidden" name="id" value="<?php echo $todos['id'] ?>">
									<input type="submit" name="delete" value="Delete" />
								</form>
							</li>
						<?php endif ?>
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