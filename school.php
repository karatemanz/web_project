<?php session_start(); 

	require 'assets/app/site_cache.php';
	// PHP initializations
	$page = "school";

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
			<h1>Schoolwork</h1>
			<p>
				The following serves as the list of coursework that I have taken or will take in my studies as a Computer Engineering
				Student at the University of Pittsburgh. Check the <a href="/class/portfolio/projects.php">projects page</a> for some samples of coding.
				The code I have written consists of Java, C, PHP, HTML/CSS, and Javascript.
			</p>
			<br><br>
			<hr>
			
			
			<article>
				
				<div class="acord" onclick="acordToggle(0)"><h3>FRESHMAN YEAR -- University of Pittsburgh at Greensburgh (2013-2014)</h3></div>
				<div class="acord-content" id="ac0">	
				<h3>Term One:</h3>
				<ul>
					<li>Engineering Analysis I 		  			- ENGR   0015</li>
					<li>General Chemistry I	+ LAB     			- CHEM   0110</li>
					<li>Physics I (Calc)       		 		    - PHYS   0174</li>
					<li>Calculus I             		  			- MATH   0220</li>
					<li>English Composition I (Engr)  			- ENGCMP</li>
				</ul>
				<br>
				<h3>Term Two:</h3>
				<ul>
					<li>Engineering Analysis II		  			- ENGR   0016</li>
					<li>General Chemistry II + LAB	  			- CHEM   0120</li>
					<li>Physics II (Calc) 			  			- PHYS   0174</li>
					<li>Calculus II					  			- MATH   0230</li>
					<li>English Composition II (Engr) 			- ENGCMP </li>
				</ul>
				</div>
				<br><br>
				<hr>

				<div class="acord" onclick="acordToggle(1)">
					<h3>SOPHMORE YEAR -- University of Pittsburgh (2014-2015)</h3>
				</div>
				<div class="acord-content" id="ac1">	
				<h4>Term One:</h4>
				<ul>
					<li>Intermediate Java Programming 			- COE  0401</li>
					<li>Digital Logic			      			- COE  0132</li>
					<li>Linear Circuits & Systems I   			- COE  0031</li>
					<li>Differential Equations        			- MATH 0290</li>
					<li>Intro. To Psycology		      			- PSY  0010</li>
				</ul>
				<br>
				<h4>Term Two:</h4>
				<ul>
					<li>Data Structures  		      			- COE  0445</li>
					<li>Computer Organization		  			- COE  0147</li>
					<li>Linear Circuits & Systems II  			- COE  0041</li>
					<li>Social Psycology              			- PSY  0105</li>
				</ul>
				<br>
				<h4>Term Three: (Summer 2015)</h4>
				<ul>
					<li>Algorithm's  		          		 	- COE    1501</li>
					<li>Written Proffesional Communications		- ENGCMP 0400</li>
				</ul>
				</div>
				<br><br>
				<hr>
				
				<div class="acord" onclick="acordToggle(2)">
					<h3>JUNIOR YEAR -- University of Pittsburgh (2015-2016)</h3>
				</div>
				<div class="acord-content" id="ac2">	
				<h4>Term One:</h4>
				<ul>
					<li>Systems Software	  					- COE   0449</li>
					<li>Digital Lab			     			    - COE   0501</li>
					<li>Linear Algebra 	       		 		    - MATH  0290</li>
					<li>Microeconomics				  			- ECON  0100</li>
					<li>Philosophy of Religion					- PHIL	0470</li>
					<li>Marching Band							- MUSIC 0630</li>
				</ul>
				<br>
				<h4>Term Two:</h4>
				<ul>
					<li>Programming For Web Apps.		  		- CS   1520</li>
					<li>Advanced Digital Design		  			- COE  1502</li>
					<li>Computer Architecture 			  		- CS   1541</li>
					<li>Game Theory					  			- ECON </li>
				</ul>
				</div>
				<br><br>
				<hr>

				<div class="acord" onclick="acordToggle(3)">
					<h3>SENIOR -- University of Pittsburgh (2013-2014)</h3>
				</div>
				<div class="acord-content" id="ac3">	
				<h4>Term One:</h4>
				<ul>
					<li>Databases			 		  			- COE  	1555</li>
					<li>Introduction to Networks	  			- ECE  	1337</li>
					<li>Applied Crytptogrophy					- COE  	1653</li>
					<li>Probability and Statistics (Engr)       - ENGR 	0020</li>
					<li>Music of the Beatles					- MUSIC 0711</li>
					<li>History of Jazz						  	- MUSIC 0711</li>
					<li>Marching Band							- MUSIC 0630</li>
				</ul>
				<br>
				<h4>Term Two:</h4>
				<ul>
					<li>Software Engineering				    - COE  1530</li>
					<li>Senior Design						  	- COE  </li>
					<li>The Internet of Things 		  			- COE  </li>
					<li>Open Elective (Fundamental Prog) 		- CS</li>
					<li>Open Elective (Marching Band)			- MUSIC</li>
				</ul>
				</div>
				<br><br>
				<hr>

			</article>
		</div>





	</div>

	<?php require_once 'assets/views/footer.php' ?>
	
</body>
</html>