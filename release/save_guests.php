<?php 
	
	include_once 'bd.php';

	if(isset($_POST['first-name'])) $first_name = $_POST['first-name'];
	if($first_name == '') die('Введите пожалуйста ваше имя. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	if(isset($_POST['second-name'])) $second_name = $_POST['second-name'];
	if($second_name == '') die('Введите пожалуйста вашу фамилию. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	if(isset($_POST['will-be'])) {
		$will_be = true;
	} else {
		$will_be = false;
	}

	$first_name = trim(strip_tags($first_name));
	$first_name = $mysqli->real_escape_string($first_name);

	$second_name = trim(strip_tags($second_name));
	$second_name = $mysqli->real_escape_string($second_name);

	if ($mysqli->query("INSERT INTO list (name, surname, willbe) VALUES ('$first_name', '$second_name', '$will_be')")) {
		printf("Имя и фамилия добавлены успешно");
	} else {
		printf($mysqli->error);
	};

	$mysqli->close();
 ?>

 <a href="index.php">Домой</a>