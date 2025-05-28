<?php
session_start();

if (!empty($_SESSION['count'])) {
	$_SESSION['count']++;
} else {
	$_SESSION['count'] = 1;
}
$count = $_SESSION['count'];
session_commit();
sleep(5);

echo $count;