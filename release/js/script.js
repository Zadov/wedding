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

var linkNav = document.querySelectorAll('[href^="#nav-"]'),
		V = 0.5;
for (var i = 0; i < linkNav.length; i++) {
	linkNav[i].addEventListener('click', function(e) {
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
	window.scrollBy(0,-30); // чем меньше значение (цифра -30), тем выше скорость перемещения
	if (window.pageYOffset > 0) {requestAnimationFrame(go_up);} // если значение прокрутки больше нуля, то функция повториться
}

document.getElementById('up').addEventListener('click', function(e) {
	e.preventDefault();
	go_up();
}, false);