<?php
	$link = mysql_connect("localhost", "root", "") or die("Ошибка ". mysql_error($link));
	$db = mysql_select_db("phone_db");
	mysql_query("SET NAMES 'utf8'");

	if (!$link || !$db) {
		exit(mysql_error());
	}
?>