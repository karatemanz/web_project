<?php 

	require_once 'init.php';

	$messageQuery = $db->prepare("
		SELECT * 
		FROM messages
	");

	$messageQuery->execute();

	while($fetch = $messageQuery->fetch(PDO::FETCH_ASSOC)){

		$name = $fetch['name'];
		$message = $fetch['message'];

		echo "<li class='chat-m'><b>".ucwords($name)."</b>: ".$message."</li>";

	}

 ?>