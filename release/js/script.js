// function flyTitle() {
// 	var filled_input = document.querySelectorAll(".guest-form__input");
// 	var filled_title = document.querySelectorAll(".guest-form__input-title");

// 	for (var i = 0; i < filled_input.length; i++) {
// 		if (filled_input[i].value != '') {
// 			filled_title[i].classList.add("fly-title");
// 		}
// 	}
// }

var filled_input = document.querySelectorAll(".guest-form__input");
var filled_title = document.querySelectorAll(".guest-form__input-title");

for (var i = 0; i < filled_input.length; i++) {
	filled_input[i].addEventListener("focusout", function(event) {
		for (var i = 0; i < filled_input.length; i++) {
			if (filled_input[i].value != '') {
				filled_title[i].classList.add("fly-title");
			} else {
				filled_title[i].classList.remove("fly-title");
			}
		}
	})
}
