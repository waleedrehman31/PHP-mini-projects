<?php include 'database.php' ?>
<?php 
	// set question number
	$number = (int)$_GET['n'];

	/*
	* Get Question
	*/
	$query = "SELECT * FROM questions WHERE question_number = $number";	

	// Get Result 
	$result_question = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result_question->fetch_assoc();

	/*
	* Get Choices
	*/
	$query = "SELECT * FROM choices WHERE question_number = $number";	

	// Get Result 
	$result_choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$chocies = $result_choices->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP QUIZERR</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">
				Question 1 of 5
			</div>
			<p class="question"><?php echo $question['text']; ?></p>
			<form method="POST" action="process.php">
				<ul class="choices">
					<?php foreach ($chocies['text'] as $choice) :?>
					<li>
						<input type="radio" name="choice" value="1">
						HyperText Preprocessor
					</li>
				<?php endforeach ?>
					<li>
						<input type="radio" name="choice" value="1">
						Private Home Page
					</li>
					<li>
						<input type="radio" name="choice" value="1">
						Personal Home Page
					</li>
					<li>
						<input type="radio" name="choice" value="1">
						Personal HyperText Preprocessor
					</li>
				</ul>
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2021 PHP Quizer
		</div>
	</footer>
</body>
</html>