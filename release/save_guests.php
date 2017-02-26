<?php 
	
	include_once 'bd.php';

	if(isset($_POST['first-name'])) $first_name = $_POST['first-name'];
	if($first_name == '') die('Введите пожалуйста ваше имя. Вернуться для заполнения формы <a href="index.php">на предыдущую страницу</a>');

	$first_name = strip_tags($first_name);
	$first_name = trim($first_name);
	// $first_name = mysqli_real_escape_string($first_name);

	$sql_first_name = "INSERT INTO list (name) VALUES ('$first_name')";
	if (mysqli_query($link, $sql_first_name) === TRUE) {
		printf("Добавлено успешно");
	} else {
		mysqli_error();
	};

	// $query_name = mysqli_query($link, $sql_first_name) or die(mysqli_error());

	// if(isset($query_name)) {
	// 	echo "Добавлено успешно";
	// } else {
	// 	echo "Не успех";
	// }

 ?>

 <a href="index.php">Домой</a>