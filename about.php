  <!DOCTYPE html>
	<html lang="ru">
	<head>
		<title>Страница пользователя</title>
		<meta charset="utf-8">
	</head>
	<body>
<?php
$userName = 'Алекс';
$age = '33';
$email = 'sashamexona@yandex.ru';
$city = 'Екатеринбург';
$about_me = 'Изучаю PHP';
?>
		<h1>Страница пользователя <?= $userName ?></h1>
		<table>
			<tr>
				<td>Имя</td><td><?= $userName ?></td>
			</tr>
			<tr>
				<td>Возраст</td><td><?= $age ?></td>
			</tr>
			<tr>
				<td>Адрес электронной почты</td>
				<td><a href="<?= $email ?>"><?= $email ?></td>
			</tr>
			<tr>
				<td>Город</td><td><?= $city ?></td>
			</tr>
			<tr>
				<td>О себе</td><td><?= $about_me ?></td>
			</tr>
		</table>
	</body>

