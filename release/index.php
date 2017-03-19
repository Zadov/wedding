<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Приглашение на свадьбу Саши и Лены</title>
</head>
<body>
	<header class="main-header">
		<div class="img-container">
			<img class="img-container__img" src="img/LS2.jpg" alt="Лена и Саша">
			<h1 class="img-container__title">
				<span class="img-container__names">Саша</span>
				<img class="img-container__heart" src="img/heart.png" alt="heart" width="200" height="250">
				<span class="img-container__names">Лена</span>
			</h1>
		</div>

		<div class="container">
			<nav class="main-navigation">
				<ul class="main-navigation__list">
					<li><a href="#nav-timing">Тайминг</a></li>
					<li><a href="#nav-">Наши цвета</a></li>
					<li><a href="#nav-i-will-come">Я приду</a></li>
					<li><a href="#nav-">Место</a></li>
				</ul>
			</nav>
			<img class="invite" src="img/invite2.jpg" alt="">
			<p id="nav-timing" class="time">17 июня 2017<br>Начало в 16:00</p>
		</div>
	</header>
	
	<main>
		<div class="container">
				<form id="nav-i-will-come" action="save_guests.php" method="post" class="guest-form">
				<div class="guest-form__row">
					<div class="guest-form__input-block">
						<input class="guest-form__input" type="text" name="first-name" id="first-name">
						<label class="guest-form__input-title" for="first-name">Имя:</label>
					</div>
				</div>

				<div class="guest-form__row">
					<div class="guest-form__input-block">
						<input class="guest-form__input" type="text" name="second-name" id="second-name"">
						<label class="guest-form__input-title" for="second-name">Фамилия:</label>
					</div>
				</div>

				<div class="guest-form__row">
					<input id="will-be-alone" class="guests-form__radio" type="radio" name="will-be" value="alone">
					<label class="guests-form__radio-title" for="will-be-alone">Я приду</label>
				</div>

				<div class="guest-form__row">
					<input id="will-be-pare" class="guests-form__radio" type="radio" name="will-be" value="pare">
					<label class="guests-form__radio-title" for="will-be-pare">Приду с парой</label>
				</div>

				<div class="guest-form__row">
					<input id="will-be-no" class="guests-form__radio" type="radio" name="will-be" value="no">
					<label class="guests-form__radio-title" for="will-be-no">Не смогу прийти</label>
				</div>

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
			<a href="#" id="up">Вверх</a>
		</div>

	</footer>

<script src="js/script.js"></script>
</body>
</html>