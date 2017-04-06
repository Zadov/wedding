<?php 
// header("Content-Type: text/html; charset=utf-8");
	
	include_once 'bd.php';

	// if(isset($_POST['first-name'])) $first_name = $_POST['first-name'];
	// if($first_name == '') die('Введите пожалуйста ваше имя. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	// if(isset($_POST['second-name'])) $second_name = $_POST['second-name'];
	// if($second_name == '') die('Введите пожалуйста вашу фамилию. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	// if(isset($_POST['comment'])) $comment = $_POST['comment'];

	// $will_be = '';
	// if(isset($_POST['will-be'])) $will_be = $_POST['will-be'];
	// if($will_be == '') die('Сообщите нам пожалуйста о своем намерении присутствовать на нашей свадьбе. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	// $first_name = $_POST['name'];
	// $second_name = $_POST['surname'];
	// $comment = $_POST['comment'];
	// $will_be = $_POST['come'];

	$first_name = $_POST['first-name'];
	$second_name = $_POST['second-name'];
	$comment = $_POST['comment'];
	$will_be = $_POST['will-be'];



	$first_name = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($first_name)))));
	$first_name = $mysqli->real_escape_string($first_name);

	$second_name = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($second_name)))));
	$second_name = $mysqli->real_escape_string($second_name);

	$comment = stripslashes(htmlspecialchars(addslashes(trim(strip_tags($comment)))));
	$comment = $mysqli->real_escape_string($comment);




	if ($mysqli->query("INSERT INTO list (name, surname, willbe, comment) VALUES ('$first_name', '$second_name', '$will_be', '$comment')")) {
		echo "Имя и фамилия добавлены успешно";
	} else {
		echo "$mysqli->error";
	};

	$mysqli->close();


	// echo '<p><a href="index.php">Домой</a></p>';