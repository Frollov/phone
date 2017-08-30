<?php
	include_once "connection.php";

	$id = $_GET['id'];

	$query = "DELETE FROM phonebook WHERE id='$id'";
	mysql_query($query);

	mysql_close();

	echo "Entry Delete!";
	echo '<a href="index.php">Back</a>'
?>