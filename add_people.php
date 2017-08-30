<!DOCTYPE html>
<html>
<head>
	<title>PhoneDirectory</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="" method="POST">
		<h3>Добавление новой записи</h3>
		<input type="text" name="name" placeholder="Имя" /><br /><br />
		<input type="text" name="surname" placeholder="Фамилия" /><br /><br />
		<input type="number" name="phone" placeholder="Номер телефона" /><br /><br />
		<input type="submit" name="add" value="Добавить">

	</form>

	<?php
		include_once "connection.php";

		//Проверяем нажата ли кнопка отправки

		if (isset($_POST['add'])) {		
			
		
		$name = strip_tags(trim($_POST['name']));
		$surname = strip_tags(trim($_POST['surname']));
		$phone = $_POST['phone'];
		
		$query = "INSERT INTO phonebook (name, surname, phone) VALUES ('$name', '$surname', '$phone')";
		//Записываем данные в таблицу
		mysql_query($query) or die("Ошибка ". mysql_error($link));

		//Закрываем соеединение
		mysql_close($link);

		echo "Запись успешно добавлена!";
		}

	?>
	<a href="index.php">Просмотреть телефонную книгу</a>
</body>
</html>