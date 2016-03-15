<?php session_start(); 

	// PHP initializations
	require_once 'assets/app/init.php';
	$page = "projects";

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
	
	<?php require_once 'nav.php'; ?>
	<?php require_once 'header.php'; ?>

	<div class="page-wrapper">
			
		<h1>Projects</h1>
		<br>
		<hr>
			<div class="row">

				<h2>EXHIBIT A:</h2>
				<br>
				<h3>To-Do List:</h3>
				<br>
				<p>
					This is a to-do list built on site to implement some database use. It takes the user ID within a cookie 
					and then it uses said cookie data to make a to-do list for you.
				</p>
				<br>
				
				<?php require_once 'todo.php'; ?>
				<br>

			</div>
			<hr>

			<div class="row">
				
				<h2>EXHIBIT B:</h2>
				<br>
				<h3>Rehoboth Cemetery Website</h3>
				<br>
				<p>
					This is a project I worked on with my local church to update the website dedicated to the churches cemetery. 
					The Rehoboth Cemetery Association provides a proper resting ground to those who need it. The page serves as a place
					to gives customers updates on rates and allows access to the database of those buried in the cemetery.
				</p>
				<br>
				
				<div class="row">
					<div class="reh-container">
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_chap.png" alt="Picture of the cemeteries chapel"></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_home.png" alt="The homepage of the site"></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_listings.png" alt="Burial listing portion of site"></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_old.png" alt="Older picture of the cemetery"></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_pics.png" alt="Multiple pictures of the cemetery"></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/reh_rates.png" alt="Picture of the rates page"></div>
						</div>
					</div>
				</div>
				<br>
		
				<p>
					You can find the this website at <a href="http://www.rehobothcemetery.org/">www.rehobothcemetery.org</a>.
				</p>

			</div>
			<br>
			<hr>

			<div class="row">

				<h2>EXHIBIT C:</h2>
				<br>
				<h3>Java Christmas Card Maker:</h3>
				<br>
				<p>
					A project made in my Intro to java programming that involved creating a GUI and shapes to add to a Christmas card.
					It was a fun project that allowed us to expiroment with GUI programming and interface with a printer. 
				</p>
				<br>
				
				<div class="row">
					<div class="reh-container">
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_empty.png" alt=""></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_inter.png" alt=""></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_card.png" alt=""></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_snow.png" alt=""></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_main.png" alt=""></div>
						</div>
						<div class="large-2 columns">
							<div class="reh-img"><img src="assets/img/projects/jav_code.png" alt=""></div>
						</div>
					</div>
				</div>

			</div>
			<br>

			<p>
				You can find the this project on github by <a href="https://github.com/karatemanz/postcard_maker.git">clicking here</a>.
			</p>
				
			<br>	
			</div>
			<hr>

			<div class="row">

				<h2>EXHIBIT D:</h2>
				<br>
				<h3>Java, Hang Man:</h3>
				<br>
				<p>
					This is a project made in my Intro to java programming that involved creating a GUI and program that allowed the
					user to play a game of hangman.
				</p>
				<br>
				

			</div>
			<hr>

			<div class="row">

				<h2>EXHIBIT E:</h2>
				<br>
				<h3>Algorithms, Network Graphing:</h3>
				<br>
				<p>
					This programs purpose was to implement our knowledge of graphing algorithms in graphical form. The GUI uses Breadth-First
					Search and Depth-First Search approaches in the form of Prim and Dijkstra algorithm approaches. Within the GUI these
					algorithms are used to find the minimum spanning tree, shortest path, and distinct paths of a given graph. Changing the
					graph is also allowed by downing, reinstating, and changing vertexes of a weighted graph.
				</p>
				<br>
				

			</div>
			<hr>

			<div class="row">

				<h2>EXHIBIT F:</h2>
				<br>
				<h3>Algorithms, Server Chat Client & Server:</h3>
				<br>
				<p>
					This is a project which was comprised of two program's one made to serve as the server side and one as the client side.
					Both sides are part of a chat client designed for us to implement both Additive(128) and Subsitution Cyphers when
					to transfer messages between the clients and the server. RSA is implemented in the initial handshaking stages of the 
					client-server connections.
				</p>
				<br>
				

			</div>
			<hr>



			
			<div class="row">

				<h2>OTHER:</h2>
				<br>
				<p>
					Other projects and files done throughout my study at the University of Pittsburgh
					can be found on my github by <a href="https://github.com/karatemanz">clicking here</a>.
				</p>
				<br>
				
			</div>
	</div>

	<?php require_once 'footer.php'; ?>
	
</body>
</html>