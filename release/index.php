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
					<li><a href="#nav-colors">Наши цвета</a></li>
					<li><a href="#nav-i-will-come">Я приду</a></li>
					<li><a href="#nav-place">Место</a></li>
				</ul>
			</nav>

			<img class="invite" src="img/privet-medVed.png" alt="">

		</div>
	</header>
	
	<main>
		<div class="container">
<!-- Тайминг -->
			<p class="time">17 июня 2017<br>Начало в 16:00</p>
			<img class="timing-title" id="nav-timing" src="img/timing-title.png" width="550" height="auto"></img>
			
<!-- Наши цвета -->
			<div class="colors" id="nav-colors">

				<img class="colors__img" src="img/blots.png" alt="Наши цвета" width="740" height="auto">
			</div>

<!-- Форма отправки -->
			<form id="nav-i-will-come" action="save_guests.php" method="post" class="guest-form">
				<div class="guest-form__paper">
					<img class="guest-form__title" src="img/confirm-visit.png" width="100%" height="auto">
					<div class="guest-form__row">
						<div class="guest-form__input-block">
							<input class="guest-form__input" type="text" name="first-name" id="first-name">
							<label class="guest-form__input-title" for="first-name">Имя:</label>
						</div>

						<div class="guest-form__input-block">
							<input class="guest-form__input" type="text" name="second-name" id="second-name"">
							<label class="guest-form__input-title" for="second-name">Фамилия:</label>
						</div>
					</div>

					<div class="guest-form__row">
						<input id="will-be-alone" class="guest-form__radio" type="radio" name="will-be" value="alone">
						<label class="guest-form__radio-title" for="will-be-alone">Я приду</label>

						<input id="will-be-pare" class="guest-form__radio" type="radio" name="will-be" value="pare">
						<label class="guest-form__radio-title" for="will-be-pare">Приду с парой</label>
					</div>

					<div class="guest-form__row">
						<input id="will-be-no" class="guest-form__radio" type="radio" name="will-be" value="no">
						<label class="guest-form__radio-title" for="will-be-no">Не смогу прийти</label>
					</div>

					<button class="guest-form__btn">Отправить</button>
				</div>
			</form>
		</div>


	</main>

	<footer class="main-footer">
		<div class="container">
			<div class="map">
				<img class="map__title" src="img/map-title.png" width="100%" height="auto"></img>
			</div>
			<a href="#" id="up">Вверх</a>
		</div>

	</footer>

<script src="js/script.js"></script>
</body>
</html>