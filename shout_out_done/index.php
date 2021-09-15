<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOUT OUT</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>SHOUT IT! ShoutBox</h1>
		</header>
		<div id="shouts">
			<ul>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
				<li class="shout"><span>10:15pm - </span>Waleed: Hey what's up</li>
			</ul>
		</div>
		<div id="input">
			<form method="POST" action="process.php">
				<input type="text" name="name" id="name" placeholder="Enter your name">
				<input type="text" name="message" id="message" placeholder="Enter your message">
				<br>
				<input class="shout-button" type="submit" name="submit" value="Shout It Out">
			</form>
		</div>
	</div>
</body>
</html>