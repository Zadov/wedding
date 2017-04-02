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

			<img class="invite" src="img/hi.png" alt="">

		</div>
	</header>
	
	<main>
		<div class="container">
<!-- Тайминг -->
			<div class="timing">
				<p class="timing__info">17 июня 2017<br>Начало в 16:00</p>
				<img class="timing__title" id="nav-timing" src="img/time2.png" width="100%" height="auto"></img>
				<ul class="timing__list">
					<li class="timing__event timing__event_16">Выездная регистрация</li>
					<li class="timing__event timing__event_17">Фотосессия</li>
					<li class="timing__event timing__event_18">Начало ужина</li>
					<li class="timing__event timing__event_24">Окончание вечера</li>
				</ul>
			</div>
			
<!-- Наши цвета -->
			<div class="colors" id="nav-colors">
				<img class="colors__img" src="img/ups.png" alt="Наши цвета" width="100%" height="auto">
			</div>

<!-- Форма отправки -->
			<form id="nav-i-will-come" action="save_guests.php" method="post" class="guest-form">
				<div class="guest-form__paper">
					<img class="guest-form__title" src="img/vizit.png" width="100%" height="auto">
					<div class="guest-form__row guest-form__fio">
						<div class="guest-form__input-block">
							<input class="guest-form__input" type="text" name="first-name" id="first-name">
							<label class="guest-form__input-title" for="first-name">Имя:</label>
						</div>

						<div class="guest-form__input-block">
							<input class="guest-form__input" type="text" name="second-name" id="second-name"">
							<label class="guest-form__input-title" for="second-name">Фамилия:</label>
						</div>
					</div>

					<div class="guest-form__row guest-form__radio-block">
						<input id="will-be-alone" class="guest-form__radio" type="radio" name="will-be" value="alone">
						<label class="guest-form__radio-title" for="will-be-alone">Я приду</label>

						<input id="will-be-pare" class="guest-form__radio" type="radio" name="will-be" value="pare">
						<label class="guest-form__radio-title" for="will-be-pare">Приду с парой</label>

						<input id="will-be-no" class="guest-form__radio" type="radio" name="will-be" value="no">
						<label class="guest-form__radio-title" for="will-be-no">Не смогу прийти</label>
					</div>
					<textarea class="guest-form__comment" name="comment" id="comment" cols="25" rows="2" placeholder="Для дополнительной информации"></textarea>
					<button class="guest-form__btn">Отправить</button>
				</div>
			</form>
		</div>
	</main>

	<footer class="main-footer">
		<div class="container">
			<div class="place">
				<img class="place__title" id="nav-place" src="img/map-title.jpg" width="70%" height="auto"></img>
				<div class="place__block">
					<p>Регистрация: мы сообщим адрес чуть позже</p>
					<p>Ужин: ул. Воскресенская, 20<br>Ресторан &laquo;Соль и Перец&raquo;<br>ТРК &laquo;Титан-Арена&raquo;<br>отдельный вход со стороны ул.Воскресенская</p>
				</div>
			</div>
		</div>

		<iframe src="https://api-maps.yandex.ru/frame/v1/-/C6QkuSiQ" width="100%" height="400" frameborder="0"></iframe>
	</footer>
	<a href="#" id="up"></a>
<script src="js/script.js"></script>
</body>
</html>