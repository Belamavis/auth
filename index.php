<?php
	header("Content-Type: text/html; charset=utf-8");
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	if (!isset($_COOKIE['registered'])) {
			setcookie('registered','no');
			header('Location: cgi/welcome.php');
		}
	if ($_COOKIE['registered'] == 'no') {
			header('Location: cgi/welcome.php');
		}
	exit();
?>
<html>
	<head>
		<title>Главная</title>
		<meta charset="utf-8"/>
		
	</head>
	<body>
		<h1>Добро пожаловать!</h1>
	</body>
</html>
