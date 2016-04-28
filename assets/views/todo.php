<?php 

	require_once '../../assets/app/init.php';

	$itemsQuery = $db->prepare("
		SELECT id, name, done
		FROM items
		WHERE user = :user
	");

	$itemsQuery->execute([
		'user' => $_SESSION['user_id']
	]);

	$items = $itemsQuery->rowCount() ? $itemsQuery : [];

 ?>
<div class="todo">
				<h1 class="todo-header">To Do:</h1>

				<?php if(!empty($items)): ?>
				<ul class="do-items">
					<?php foreach($items as $item): ?>
					<li>
						<span class="do-item <?php echo $item['done'] ? ' done' : ' ' ?>"><?php echo $item['name']; ?></span>
						<?php if(!$item['done']): ?>
							<button onclick="markItem(<?php echo $item['id']; ?>)" class="done-button">Mark Done</a>
						<?php endif; ?>
						<button onclick="deleteItem(<?php echo $item['id']; ?>)" class="delete-button">X</a>
					</li>
					<?php endforeach; ?>
				</ul>
			<?php else: ?>
				<p>Enter some things to do!!!</p>
			<?php endif; ?>


		<!--<form class="item-add" id="add" action="assets/app/add.php" method="POST">-->
			<input type="text" id="item" name="name" placeholder="enter new to-do item here" class="input" autocomplete="off" required>
			<input type="submit" value="Add" onclick="addItem()" class="submit">
		<!--</form>-->

</div>