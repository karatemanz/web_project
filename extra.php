<?php session_start(); 

	require 'assets/app/site_cache.php';
	// PHP initializations
	$page = "extra";

	// list consists of videos
	// 0.) Skyzone
	// 1.) JNN Top 10
	// 2.) Revenge of the Pink Flamingo
	// 3.) Chon's Karate Demo
	// 4.) Karate Camp/Seminar
	$videos = array("PUSneDrfeDQ", "teQ-88AoWLM", "v3pKLxCKLmg", "EBNLW2O9gMY", "5mcY3NV8lWw");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = 0;
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
			<h1>Extracurricular</h1>
		</div>
		<br><br>
		<hr>

		<section id="#videos">
			<h2>Videos: For School & Fun</h2>
			<br>
			<div class="row">
				<div class="video-container">
					<iframe id="youtube" src="https://www.youtube.com/embed/PUSneDrfeDQ?autoplay=0"></iframe>
				</div>
				<br>
				<div class="video-gallery">
					<div class="video-thumb">
						<div class="card">
							<div class="front">
								<img class="play" src="assets/img/extra/play.png" alt="">
								<img class="thumb" src="assets/img/extra/skyzone.png" alt="">
							</div>
							<div class="back" onclick="swapMe(0)"><p>Trip to skyzone video credits to Geno Leone</p></div>
						</div>
					</div>
					<div class="video-thumb">
						<div class="card">
							<div class="front">
								<img class="play" src="assets/img/extra/play.png" alt="">
								<img class="thumb" src="assets/img/extra/jnn.png" alt="">
							</div>
							<div class="back" onclick="swapMe(1)"><p>AP U.S. history project video credits to Geno Leone</p></div>		
						</div>	
					</div>
					<div class="video-thumb">
						<div class="card">
							<div class="front">
								<img class="play" src="assets/img/extra/play.png" alt="">
								<img class="thumb" src="assets/img/extra/flamingo.png" alt="">
							</div>
							<div class="back" onclick="swapMe(2)"><p>Music video credits to Dan Bednardzcyk.</p></div>	
						</div>	
					</div>
					<div class="video-thumb">
						<div class="card">
							<div class="front">
								<img class="play" src="assets/img/extra/play.png" alt="">
								<img class="thumb" src="assets/img/extra/chons.png" alt="">
							</div>
							<div class="back" onclick="swapMe(3)"><p>Demo at St. Epiphany Church.Video credits to Lee Vercoe.</p></div>
						</div>	
					</div>
					<div class="video-thumb">
						<div class="card">
							<div class="front">
								<img class="play" src="assets/img/extra/play.png" alt="">
								<img class="thumb" src="assets/img/extra/kcamp.png" alt="">
							</div>
							<div class="back" onclick="swapMe(4)">Karate Camp. Video credits to Lee Vercoe.</div>	
						</div>	
					</div>

				</div>
			</div>
			<br><br>
			<hr>
		</section>

		<section id="#vectors">
			<div class="row">
				<h2>The Vectors:</h2>
			</div>
			<br>
			<div class="row">
				<p>
					The Vectors is a punk/ska project that a friend of mine started and asked me to play trumpet for some of the songs
					on the albums. Currently there are two albums, "Songs And How Not to Write Them" and "Yellow Snow". The third video
					above is a music video my friend made featuring one of the songs on the first album.
				</p>
			</div>
			<br><br>

			<div class="row">
				<div class="large-6 columns">
					<?php require_once 'assets/views/player.php'; ?>
				</div>
				<div class="large-6 columns">
					<img src="assets/img/extra/SNWT_tracklist.jpg" alt="">
				</div>	
			</div>
			<br><br>

			<div class="row">
				<div class="album-gallery">
					<div class="large-4 columns"><img src="assets/img/extra/SNWT_cover.jpg" alt=""></div>
					<div class="large-4 columns"><img src="assets/img/extra/SNWT_booklet.jpg" alt=""></div>
					<div class="large-4 columns"><img src="assets/img/extra/yellowsnow.png" alt=""></div>
				</div>	
			</div>
			<br><br>

			<div class="row">
				<p>
				   Above is cover art and set listings for the albums produced so far along with a music player with songs from
				   our first album. If you get a chance you can find the vectors on facebook, <a href="https://www.facebook.com/TheVectors14/">here</a>.
				</p>
				<br>
				<div class="quote">
					"It's like One Direction, but with some Magnitude!" ~Gerald JR Hinerman
				</div>
			</div>
			<br><br>
			<hr>
		</section>


		
	</div>

	<?php require_once 'assets/views/footer.php'; ?>
	
</body>
</html>