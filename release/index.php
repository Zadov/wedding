<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Приглашение на свадьбу Саши и Лены</title>
</head>
<body>
	<img class="main-img" src="img/LS.jpg" alt="Лена и Саша">
	<header class="main-header">
		<div class="container">
			<!-- <h1 class="main-header__title">Приглашаем Вас на нашу свадьбу!</h1> -->
			<nav class="main-navigation">
				<ul class="main-navigation__list">
					<li><a href="#">Тайминг</a></li>
					<li><a href="#">Наши цвета</a></li>
					<li><a href="#">Я приду</a></li>
					<li><a href="#">Место</a></li>
				</ul>
			</nav>
			<img class="invite" src="img/invite2.jpg" alt="">
			<p class="time">17 июня 2017<br>Начало в 16:00</p>
		</div>
	</header>
	
	<main>
		<div class="container">
			
		</div>


	</main>

	<footer class="main-footer">
		<div class="container">
			<form action="save_guests.php" method="post">
				<label for="first-name">Имя:</label>
				<input type="text" name="first-name" id="first-name" value="Имя">
				<label for="second-name">Фамилия:</label>
				<input type="text" name="second-name" id="second-name" value="Фамилия">
				<button>Отправить</button>
			</form>
		</div>

	</footer>

</body>
</html>