<?php 
	
	include_once 'bd.php';

	if(isset($_POST['first-name'])) $first_name = $_POST['first-name'];
	if($first_name == '') die('Введите пожалуйста ваше имя. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	$first_name = strip_tags($first_name);
	$first_name = trim($first_name);
	$first_name = $mysqli->real_escape_string($first_name);

	if ($mysqli->query("INSERT INTO list (name) VALUES ('$first_name')")) {
		printf("Добавлено успешно");
	} else {
		printf($mysqli->error);
	};

	$mysqli->close();
 ?>

 <a href="index.php">Домой</a>