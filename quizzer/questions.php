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
			<p class="question">What does php stand for?</p>
			<form method="POST" action="process.php">
				<ul class="choices">
					<li>
						<input type="radio" name="choice" value="1">
						HyperText Preprocessor
					</li>
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