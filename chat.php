<?php session_start(); 
	
	require 'assets/app/site_cache.php';
	// PHP initializations
	$page = "chatter";
	if(isset($_SESSION['user'])){
		$user = $_SESSION["user"];
	}else{
		header("Location: ../../index.php");	
	}
	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Andrew Zundel - Personal Portfolio</title>

	<!-- STYLESHEETS AND FONTS -->
	<link rel="stylesheet" href="assets/css/foundation.css">
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
	
	<?php require_once 'assets/views/nav.php'; ?>
	<?php require_once 'assets/views/header.php'; ?>

	<div class="page-wrapper">
	
	<div class="row">
	
		<h2>Site Chat Client</h2>
		<br>
		<hr>

		<div class="chat-container">
			<div class="chat">
				<div class="chat-head">
					<h3>Welcome, <?php echo ucwords($user); ?>!!!</h3>
				</div>
				<div class="message"></div>
				<div class="chat-foot">
					<form action="#" onSubmit="return false;" id="chat-form">
						<input type="hidden" id="name" value="<?php echo $user; ?>">
						<input type="text" name="text" id="text" value="" placeholder="type your chatter here..." autocomplete="off" required>
						<input type="submit" name="submit" value="Post">
					</form>
				</div>
			</div>
		</div>
	</div>
		
	</div>
	
	<?php require_once 'assets/views/footer.php' ?>
	
</body>
</html>
