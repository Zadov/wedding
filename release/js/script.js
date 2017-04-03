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
				hash = this.href.replace(/[^#]*(.*)/, '$1');
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

var regVr22 = "<div><img style='margin-bottom:-4px;' src='../load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение обрабатывается...</span></div><br />";

if (sendButton) {
	sendButton.addEventListener('click', function(e) {
		e.preventDefault();
		popup.classList.add('form-popup_show');
		popup.innerHtml = regVr22;
	})
}

if (close) {
	close.addEventListener('click', function(e) {
		e.preventDefault();
		popup.classList.remove('form-popup_show');
	})
}

var regVr22 = "<div><img style='margin-bottom:-4px;' src='../load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение обрабатывается...</span></div><br />";

