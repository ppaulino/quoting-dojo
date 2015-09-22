<?php 
session_start(); 
require_once('new-connection.php');

if($_POST['name'] == NULL || $_POST['quote'] == NULL) {
	$_SESSION['message'] = "Fill-out both fields.";
	header("Location: index.php");
	exit();
}

else {
	$query = "INSERT INTO quotes (name, quote, created_at, updated_at)
	VALUES('{$_POST['name']}','{$_POST['quote']}', NOW(), NOW())";
	run_mysql_query($query);
	header("Location: main.php");
	exit();
}

?>