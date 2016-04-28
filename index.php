<?php session_start(); 

	require 'assets/app/site_cache.php';
	// PHP initializations
	$page = 'home';

	if(!isset($_SESSION["user"])){
		$no_username = true;
	}else{
		$user = $_SESSION["user"];
		$no_username = false;
	}	


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	
		<div class="row head-text">
			<h1>About Me</h1>
		</div>
		<br>
		<div class="row">
			<div class="row">
				<div class="large-4 medium-4 columns">
					<div class="social-icon"><a href="https://www.facebook.com/andrew.zundel.9"><img src="assets/img/home/face-home.png"></a></div>
					<div class="social-icon"><a href="https://www.linkedin.com/in/adzundel"><img src="assets/img/home/linked-home.png"></a></div>
				</div>	
				<div class="large-4 medium-4 columns"><div class="about-image"></div></div>	
				<div class="large-4 medium-4 columns">
					<div class="social-icon"><a href="https://github.com/karatemanz"><img src="assets/img/home/git-home.png"></a></div>
					<div class="social-icon"><a href="https://twitter.com/karatemanZ"><img src="assets/img/home/twit-home.png"></a></div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-12 columns">
				Currently, I am a junior, sixth-semester, undergraduate student majoring in the field of Computer Engineering 
				at the University of Pittsburgh and expected to graduate in the spring of 2017. My passions cover multiple areas 
				of the Computer Engineering world, but most of my focus is aimed at software development for web applications and 
				the software development lifecycle. 
				</div>
			</div>
			<br><br>
			<div class="row">
				
				<div class="large-6 medium-6 columns">
					Through my studies in at the University of Pittsburgh, I have developed a deep understanding of the use of the 
					Java programming language. The university’s Computer Engineering department relies strongly on Java as its primary 
					language for teaching aspects of programming. Due to a strong understanding of algorithms and data structures, 
					I believe many aspects of code development, structure, and implementation can be easily translated to any other 
					language through research and practice. 
				</div>
				<div class="large-6 medium-6 columns">
					Outside of the classroom I have dedicated time and effort to establish comfort in programming with HTML/CSS and PHP. 
					Recently I have used said knowledge to help my local churches cemetery organization to update their website to provide 
					information about the current burial listings of the cemetery. With the use of the interpersonal skills I have learned 
					as a Life Guard, and a strong need to be passionately curious about people and technology, I believe I will make a good 
					candidate to fill this position.</div>
			</div>
		</div>
		<br><br>

		
	</div>

	<?php require_once 'assets/views/login.php' ?>
	<?php require_once 'assets/views/footer.php' ?>

	<?php if($no_username): ?>
		<script>displayLogin();</script>	
	<?php else: ?>
		<script>hideLogin();</script>
	<?php endif; ?>	

</body>
</html>