<?php include 'database.php' ?>
<?php 
	//create selelect query
	$query = "SELECT * FROM shouts";
	$shouts = mysqli_query($connection, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOUT OUT</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
	<div class="container">
		<header>
			<h1>SHOUT IT! ShoutBox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
					<li class="shout">
						<span><?php echo $row['time']; ?> - </span>
						<strong><?php echo $row['user']?></strong>: <?php echo $row['message']; ?>
					</li>
				<?php endwhile ?>
			</ul>
		</div>
		<div id="input">
			<?php if (isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif ?>
			<form method="POST" action="process.php">
				<input type="text" name="name" id="name" placeholder="Enter your name" />
				<input type="text" name="message" id="message" placeholder="Enter your message" />
				<br />
				<input class="shout-button" type="submit" name="submit" value="Shout It Out" />
			</form>
		</div>
	</div>
</body>
</html>