<?php

try {
	$db = new PDO('mysql:host=mariadb;dbname=conference;charset=utf8mb4', 'test', 'segreta');
} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()
	));
}
//var_dump($db);