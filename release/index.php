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
				<form action="save_guests.php" method="post" class="guest-form">
			<!-- <form action="http://echo.htmlacademy.ru" method="post"> -->
				<div class="guest-form__row">
					<input class="guest-form__input" type="text" name="first-name" id="first-name">
					<label class="guest-form__input-title" for="first-name">Имя:</label>
				</div>
				
				<div class="guest-form__row">
					<input class="guest-form__input" type="text" name="second-name" id="second-name"">
					<label class="guest-form__input-title" for="second-name">Фамилия:</label>
				</div>

				<div class="guest-form__row">
					<label for="will-be">Я приду:</label>
					<input type="checkbox" name="will-be" id="will-be">

				<div class="guest-form__row">
					<input type="checkbox" id="not-alone" class="not-alone">
					<label for="not-alone">Я приду не один</label>
					<details>
						<summary>reindent</summary>
						<p><b>Alt+Shift+f</b></p>
					</details>
					<details>
						<summary>забрать гист</summary>
						<p><b>ctrl+k,ctrl+o</b></p>
					</details>
				</div>

				<button>Отправить</button>
			</form>
		</div>


	</main>

	<footer class="main-footer">
		<div class="container">

		</div>

	</footer>
<script src="js/script.js"></script>
</body>
</html>