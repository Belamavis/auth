<?php

?>

<html>
	<head>
		<title>Добро пожаловать</title>
		<meta charset='utf-8'/>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		<div id="login" class="enter">
			<p class="title">Вход на сайт</p>
			<form name="login" action="cgi/login.php" method="POST">
				<input class="log_field" name="username" type="text" placeholder="Введите имя пользователя..." required><br>
				<input class="log_field" name="password" type="password" placeholder="Введите пароль..." required><br>
				<button name="login_submit" class="log_submit">Войти</button>
			</form>
		</div>
		<div id="register" class="enter clearfix">
			<p class="title">Регистрация</p>
			<form id="register_site" action="register_site.php" method="POST"></form>
			<form id="register_vk" action="register_vk.php" method="POST"></form>
			<form id="register_fb" action="register_fb.php" method="POST"></form>
			<button class="register" form="register_site" type="submit">Зарегистрироваться на сайте</button><br>
			<button class="register" form="register_vk" type="submit">Зарегистрироваться через VK</button><br>
			<button class="register" form="register_fb" type="submit">Зарегистрироваться через Facebook</button><br>
		</div>
	</body>
</html>
