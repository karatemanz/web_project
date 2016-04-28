<?php session_start();

	require_once 'init.php';

	$_SESSION["user"] = $_POST["user"];
	$user = $_POST["user"];


	$queryCheck = $db->prepare("SELECT * FROM users");
	$queryCheck->execute();

	while($fetch = $queryCheck->fetch(PDO::FETCH_ASSOC)){

		$name = $fetch["username"];
		$id = $fetch["id"];

		if($name == $user){
			$_SESSION["user_id"] = $id; 
			exit(0);
		}

	}

	$_SESSION["user_id"] = $id + 1;

	$user = ucwords($user);

	$queryAdd = $db->prepare("
		INSERT INTO users(username)
		VALUES (:newUser)
	");

	$queryAdd->execute([
		'newUser' => $user
	]);


 ?>