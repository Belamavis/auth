<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
    
	require('db.php');
	$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_name);
	if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
	}
	$user_query = "SELECT * FROM users WHERE username = '".$_POST['username']."';";
	$pwd_hash = md5($_POST['password']);
	$result = $mysqli->query($user_query);
	if (!($result)) {
			echo "Неверное имя пользователя или неверный пароль - 1";
			die();
		}  else {
				$login_data = $result->fetch_assoc();
			}
	if ( ($login_data['pwdhash'] == $pwd_hash) ) {
			echo "Добро пожаловать!";
			die();
		} else {
			echo "Неверное имя пользователя или неверный пароль - 2";
			die();				
			}
	$mysqli->close();
?>
