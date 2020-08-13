<?php 

$mysqli = new mysqli("127.0.0.1", "root", "Zadoff112", "guests");

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_errno);
}

if (!$mysqli->set_charset("utf8")) {
	printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
	exit();
}

 ?>