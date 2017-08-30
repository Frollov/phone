<!DOCTYPE html>
<html>
<head>
	<title>PhoneDirectory</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		include_once "connection.php";

		//С глобального массива GET получаем id записи
		$id = $_GET['id'];

		// Делаем выборку по id
		$query = "SELECT name, surname, phone FROM phonebook WHERE id='$id'";

		$result = mysql_query($query);

		

		$row = mysql_fetch_assoc($result);

		
		if (isset($_POST['save'])) {
			$name = strip_tags(trim($_POST['name']));
			$surname = strip_tags(trim($_POST['surname']));
			$phone = $_POST['phone'];
			//Делаем запрос на обновление данных
			$query = "UPDATE phonebook SET name='$name', surname='$surname', phone='$phone' WHERE id='$id' ";
			//Записываем данные в таблицу
			mysql_query($query) or die("Ошибка ". mysql_error($link));

			mysql_close();
		}
		
		

	?>

	<form action="" method="POST">
		<h3>Редактирование записи</h3>
		<input type="text" name="name" value="<?php echo $row['name'];?>" /><br /><br />
		<input type="text" name="surname" value="<?php echo $row['surname'];?>" /><br /><br />
		<input type="number" name="phone" value="<?php echo $row['phone'];?>" /><br /><br />
		<input type="submit" name="save" value="Сохранить">

	</form>

	
	<a href="index.php">Просмотреть телефонную книгу</a>
</body>
</html>