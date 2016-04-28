<?php 

	require_once 'init.php';

	$name = $_POST['name'];
	$message = $_POST['text'];

	$postQuery = $db->prepare("
		INSERT INTO messages (name, message)
		VALUES (:name, :text)
	");

	$postQuery->execute([
		'name' => $name,
		'text' => $message
	]);

 ?>