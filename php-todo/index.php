<?php  ?>
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
			<form >
				<input type="text" name="todo" />
				<input type="submit" name="add" value="Add Todo" />
			</form>
			<div>
				<ul>
					<li>
						Learn HTML
						<form>
							<input type="submit" name="complete" value="Done" />
							<input type="submit" name="delete" value="Delete" />
						</form>
					</li>
					<li>
						Learn CSS
						<form>
							<input type="submit" name="complete" value="Done" />
							<input type="submit" name="delete" value="Delete" />
						</form>
					</li>
					<li>
						Learn JS
						<form>
							<input type="submit" name="complete" value="Done" />
							<input type="submit" name="delete" value="Delete" />
						</form>
					</li>
					<li>
						Learn PHP
						<form>
							<input type="submit" name="complete" value="Done" />
							<input type="submit" name="delete" value="Delete" />
						</form>
					</li>
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