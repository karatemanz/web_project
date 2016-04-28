<?php 

	require_once 'init.php';

	$messageQuery = $db->prepare("
		DELETE FROM messages
	");

	$messageQuery->execute();

?>