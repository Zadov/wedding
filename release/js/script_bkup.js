"use strict";

// Улетающие заголовки в форме

var filled_input = document.querySelectorAll(".guest-form__input");
var filled_title = document.querySelectorAll(".guest-form__input-title");

for (var i = 0; i < filled_input.length; i++) {
	filled_input[i].addEventListener("blur", function(event) {
		for (var i = 0; i < filled_input.length; i++) {
			if (filled_input[i].value != '') {
				filled_title[i].classList.add("fly-title");
			} else {
				filled_title[i].classList.remove("fly-title");
			}
		}
	})
}

// Плавный скролл к якорю

var link_nav = document.querySelectorAll('[href^="#nav-"]'),
		V = 0.5;
for (var i = 0; i < link_nav.length; i++) {
	link_nav[i].addEventListener('click', function(e) {
		e.preventDefault();

		var w = window.pageYOffset,
				hash = this.href.replace(/[^#]*(.*)/, '$1'),
				t = document.querySelector(hash).getBoundingClientRect().top,
				start = null;

		requestAnimationFrame(step);

		function step(time) {
			if (start === null) start = time;

			var progress = time - start,
					r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));

			window.scrollTo(0,r);

			if (r != w + t) {
				requestAnimationFrame(step)
			} else {
				location.hash = hash
			}
		}
	}, false);
}

// Прокрутка на верх страницы

function go_up() {
	window.scrollBy(0,-100); // чем меньше значение (цифра -30), тем выше скорость перемещения
	if (window.pageYOffset > 0) {requestAnimationFrame(go_up);} // если значение прокрутки больше нуля, то функция повториться
}

var up = document.getElementById('up');

window.onscroll = function() {
	var pageY = window.pageYOffset || document.documentElement.scrollTop;
	var innerHeight = document.documentElement.clientHeight;

	switch (up.className) {
		case '':
			if (pageY > innerHeight) {
				up.className = 'up';
			}
			break;

		case 'up':
			if (pageY < innerHeight) {
				up.className = '';
			}
			break;
	}
}

up.addEventListener('click', function(e) {
	e.preventDefault();
	go_up();
}, false);


// загрузка формы без перегрузки страницы


var sendButton = document.querySelector('.guest-form__btn');
var popup = document.querySelector('.form-popup');
var close = document.querySelector('.form-popup__close');
var message = document.querySelector('.form-popup__message');

var sending = '<span class="loading-span">Сообщение обрабатывается...</span><img src="img/load.gif" alt="loading" width="80" height="80">';

if (sendButton) {
	sendButton.addEventListener('click', function(e) {
		e.preventDefault();
		popup.classList.add('form-popup_show');
		message.innerHTML = sending;

		var myForm = document.querySelector(".guest-form"),
				name = document.getElementById('first-name').value,
				surname = document.getElementById('second-name').value,
				comment = document.getElementById('comment').value;
				come = '';
		if (document.querySelector('input[name="will-be"]:checked')) {
			var come = document.querySelector('input[name="will-be"]:checked').value;
		}

// проверяем наличие введенных данных

		if (!come) {
			message.innerHTML = '<span>Сообщите нам пожалуйста о своем намерении присутствовать на нашей свадьбе.</span>';
		}
		if (!surname) {
			message.innerHTML = '<span>Пожалуйста, напишите свою фамилию</span>';
		}
		if (!name) {
			message.innerHTML = '<span>Пожалуйста, напишите свое имя</span>';
		}

// если все данные заполнены, включаем ajax
		if (come && surname && name) {
			var xhr = new XMLHttpRequest();
			// var vars = "name=" + name + "&surname=" + surname + "&come=" + come + "&comment=" + comment;

			
			var vars = new FormData(myForm);

			xhr.open('POST', 'save_guests.php', true);
			// xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.send(vars);


			// xhr.onload = function() {
			// 	alert(xhr.responseText);
			// };



			if (come == 'no') {
				message.innerHTML = '<span>Очень жаль, ' + name + ', что Вы не будете с нами :(</span>';
			} else {
				message.innerHTML = '<span>Мы рады, что Вы будете с нами, ' + name + '!</span>';
			}

			document.getElementById('first-name').value = '';
			document.getElementById('second-name').value = '';
			document.getElementById('comment').value = '';
			document.querySelector('input[name="will-be"]:checked').checked = false;
		}
	})
}

if (close) {
	close.addEventListener('click', function(e) {
		e.preventDefault();
		popup.classList.remove('form-popup_show');
	})
}




// Яндекс карты

ymaps.ready(init);
var myMap,
		myPlacemark;

function init(){     
	myMap = new ymaps.Map ("map", {
		center: [64.54197856, 40.53565863],
		zoom: 15
	});

	myPlacemark = new ymaps.Placemark([64.54197856, 40.53565863], 
	{ 
		balloonContent: '<b>Соль и перец</b>'
	},
	{
		iconImageHref: 'img/heartMark.png',
		// iconImageSize: [30, 42],
		// iconImageOffset: [-3, -42]
	});

	myMap.geoObjects.add(myPlacemark);
	myMap.controls.add('zoomControl', {right : '20px', top: '10px'});
	myMap.behaviors.enable('scrollZoom');
}