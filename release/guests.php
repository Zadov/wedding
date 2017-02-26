<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Приглашение на свадьбу Саши и Лены</title>
</head>
<body>
	<header class="main-header">
		<div class="container">
			<nav class="main-navigation">
				<ul class="main-navigation__list">
					<li><a href="index.php">Домой</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<main>
		<div class="container">
			<table>
				<tr>
					<td>
						<?php echo htmlspecialchars($_POST["first-name"]);?>
					</td>
					<td>
						<?php echo htmlspecialchars($_POST["second-name"]);?>
					</td>
				</tr>
			</table>
		</div>
	</main>

	<footer class="main-footer">
		<div class="container">
			
		</div>
	</footer>

</body>
</html>