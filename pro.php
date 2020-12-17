<!doctype html> 
<html>
	<head> 
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>CV</title>
	</head>

	<body>
		<div class="contain">

			<nav class="navBarPC">
				<a href="infos.php">
					<button class="nav">A propos de moi</button>
				</a>
				<a href="diplome.php">
					<button class="nav">Diplômes</button>
				</a>
			</nav>
			
			<header>
				<h1>Curriculum Vitae</h1>
			</header>

			<form action="infos.php">
				<button type="submit" class="infos">
					<h2>A propos de moi</h2>
				</button>
			</form>

			<form action="link.php">
				<button class="bloc50">
					<h2>Diplômes</h2>
				</button>
			</form>

			<form action="link.php">
				<button class="bloc50">
					<h2>Expériences professionelles</h2>
				</button>
			</form>
		</div>

		<nav class="navBarMobile">
			<a href="infos.php">
				<button class="navMobile">A propos de moi</button>
			</a>
			<a href="diplome.php">
				<button class="navMobile">Diplômes</button>
			</a>
		</nav>
	</body>
</html>