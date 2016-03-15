<?php 

		require_once 'init.php';


		if(isset($_GET['item'])){

			$item = $_GET['item'];

			if(!empty($item)) {
				$deleteQuery = $db->prepare("
					DELETE FROM items
					WHERE id = :item
				");

				$deleteQuery->execute([
					'item' => $item
				]);
			}

		}

		header('Location: ../../projects.php');

 ?>