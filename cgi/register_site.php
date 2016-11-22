<?php
	header("Content-Type: text/html; charset=utf-8");
	// Отображение всех предупреждений и ошибок
	ini_set('display_errors',1);
    error_reporting(E_ALL);
    // Подключение файла со сведениями об используемой базе данных
    require('db.php');
	// 
	$register_success = TRUE;
	// Проверка совпадения паролей
	if ($_POST['password'] != $_POST['confirm_password']) {
		echo "Пароли не совпадают!";
		$register_success = FALSE;
	}
	// Попытка подключения к серверу SQL
	$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_name);
	if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
        $register_success = FALSE;
    }
	// Проверка существования пользователя с введеным именем и почтового ящика
	$check_username_query = "SELECT username FROM ".$db_tablename." WHERE username = '".$_POST['nickname']."';";
	$check_email_query = "SELECT email FROM ".$db_tablename." WHERE email = '".$_POST['email']."';";
	$result = $mysqli->query($check_username_query);
	if (count($result->fetch_assoc())) {
		echo "Пользователь с таким именем уже существует";
		$register_success = FALSE;
	} 
	$result = $mysqli->query($check_email_query);
	if 	(count($result->fetch_assoc())) {
		echo "На данный почтовый адрес уже зарегистрирован пользователь";
		$register_success = FALSE;
	} 
	// Внесение в БД сведений о новом пользователе
	if ($register_success) {
		$pwdhash = md5($_POST['password']);
		$new_user_query = "INSERT INTO ".$db_tablename." (username, pwdhash, email) VALUES ('".$_POST['nickname']."','".$pwdhash."','".$_POST['email']."');";
		$result = $mysqli->query($new_user_query);
		if ($result) {
			echo "Пользователь ".$_POST['nickname']. " успешно создан.";
			$register_success = TRUE;
			
		} else {
			echo "Не удалось создать пользователя!";
			$register_success = FALSE;
		}
	}
	return $register_success;
?>
