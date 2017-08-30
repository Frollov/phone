<html>
<head>
	<title>PhoneBook</title>
	<meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
				
		include_once('connection.php');
		
		$query = "SELECT * FROM phonebook ORDER BY surname";
		$result = mysql_query($query);
		mysql_close();

		$count_rows = mysql_num_rows($result);?>
		<table>
		<tr>
			<td>Фамилия</td>
			<td>Имя</td>			
			<td>Номер телефона</td>
		</tr>

		<?php while ($row = mysql_fetch_array($result)) {
	
	
		
		echo "<tr><td>".$row['surname']."</td><td>".$row['name']."</td><td>".$row['phone']."</td><td>";?>
		<a href="edit_entry.php?id=<?php echo $row['id']?>">Редактировать</a>
		<a href="delete_people.php?id=<?php echo $row['id']?>">Удалить</a>
		<?php echo "</td></tr>";
	
		};?>
		</table>
	<p>Записей в книге:<?php echo " ". $count_rows;?></p>
	<a href="add_people.php">Добавить новую запись</a>
	
</body>