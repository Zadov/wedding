<?php 
	// header("Content-Type: text/html; charset=utf-8");
	include_once 'bd.php';

	if (isset($_POST['first-name'])) $first_name = $_POST['first-name'];
	if ($first_name == '') die('<span>Пожалуйста, напишите свое имя</span>');

	if (isset($_POST['second-name'])) $second_name = $_POST['second-name'];
	if ($second_name == '') die('<span>Пожалуйста, напишите свою фамилию</span>');

	if (isset($_POST['comment'])) $comment = $_POST['comment'];

	$will_be = '';
	if (isset($_POST['will-be'])) $will_be = $_POST['will-be'];
	if ($will_be == '') die('<span>Сообщите нам пожалуйста о своем намерении присутствовать на нашей свадьбе.</span>');

	$first_name = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($first_name)))));
	$first_name = $mysqli->real_escape_string($first_name);

	$second_name = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($second_name)))));
	$second_name = $mysqli->real_escape_string($second_name);

	$comment = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($comment)))));
	$comment = $mysqli->real_escape_string($comment);

	sleep(1);

	if ($mysqli->query("INSERT INTO list (name, surname, willbe, comment) VALUES ('$first_name', '$second_name', '$will_be', '$comment')")) {
		if ($will_be == "no") {
			echo '<span>Очень жаль, что Вы не будете с нами, ' . $first_name . ' :(</span>';
		} else {
			echo '<span>Мы рады, что Вы будете с нами, ' . $first_name . '!</span>';
		}
	} else {
		echo "$mysqli->error";
	};

	$mysqli->close();


	// echo '<p><a href="index.php">Домой</a></p>';