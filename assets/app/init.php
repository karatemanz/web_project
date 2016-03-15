<?php 

	$_SESSION['user_id'] = 1;

	$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root', 'djs2020');

	/* HANDLED IN ANOTHER WAY */
	if(!isset($_SESSION['user_id'])){	
		die('You are not signed in!');
	}


 ?>