<?php session_start(); 
	
	require 'assets/app/site_cache.php';
	// PHP initializations
	$page = "resume";

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
			<h1>Resume</h1>
			<br><br>
			<article>
				<h3>Andrew Zundel</h3>
				<p>
				3309 Niagara St.<br>
				Pittsburgh, PA 15213<br>
				724-757-3003<br>
				adz13@pitt.edu<br>
				</p>

				<h4>OBJECTIVE:</h4>
				<p> Seeking a summer internship at a company to work in a team to develop software using multiple technologies.</p><br><br>

				<h4>EDUCATION:</h4>
				<p>
				Pursuing a Bachelor of Science in Computer Engineering,<br> 
				Expected Graduation Date: May 2017<br>
				Swanson School of Engineering, University of Pittsburgh, Pittsburgh, PA<br>
				Current Status: Junior<br>
				Cumulative GPA: 3.211<br><br>

				Belle Vernon Area High School, Belle Vernon, PA 15012<br>
				Honors Program<br>
				Cumulative GPA: 3.758<br><br>
				
				Related Course Work: Systems Software | Algorithm Implementation | Data Structures and Abstraction<br> 
				| Intermediate Java Programming | Written Proffesional Communication | Computer Architecture and Organization <br>
				| Digital Logic Design | Social Psychology | Microeconomics | Game Theory |<br><br>
				</p>
				<br><br>
				<hr>

				<h4>SKILLS:</h4><br>
				<ul>
					<li>Proficient in Java, Microsoft Word, Publisher, Excel, Power Point</li>
					<li>Familiar with C\C++, HTML\CSS,  PHP, MySQL Query, MIPS, Javascript, VHDL and Git</li>
					<li>Strong problem-solvin, organization, and communication skills</li>
					<li>Comfortable working with Windows, Linux, and Mac Operating Systems as well as navigation by CLI or GUI</li>
				</ul>
				<br><br>
				<hr>

				<h4>EXPERIENCE:</h4><br>
				<h5>Life Guard, Crystal Pool: Summers of 2011-2015</h5>
				<ul>
					<li>Gained interpersonal, problem-solving, and team work skills through working with the public and communicating with fellow guards</li>
					<li>Developed a good understanding of responsibility for the lives of my patrons</li>
				</ul>
				<br>
				<h5>Instructor, Chon’s Karate – Tang Soo Do, Moo Duk Kwan: Summer 2014</h5>
				<ul>
					<li>Acquired communication and interpersonal skills with the public through teaching</li>
					<li>Utilized twelve years of experience as a martial arts practitioner to teach children and adults the art of Tang Soo Do </li>
				</ul>
				<br>
				<h5>Assistant Crew Chief, Sound and Light Club - Belle Vernon Area High School (BVAHS): 2010-2015</h5>
				<ul>
					<li>Obtained an understanding of communicating in a professional manner to solve problems and properly see a production run smoothly</li>
					<li>Gained a good understanding of the setup and use of audio and visual equipment involved in musicals, concerts, board meetings, etc</li>
				</ul>
				<br><br>
				<hr>

				<h4>HONORS:</h4>
				<ul>
					<li>Dean’s List – University of Pittsburgh – Fall/Spring 2014-2015</li>
					<li>Academic Merit Scholarship - University of Pittsburgh at Greensburg – Fall/Spring 2013-2014</li>
					<li>Dean’s List – University of Pittsburgh at Greensburg - Fall/Spring 2013-2014</li>
					<li>John Phillips Sousa Music Award  -- Belle Vernon High School - Spring 2013</li>
				</ul>
				<br><br>
				<hr>

				<h4>EXTRACURRICULAR ACTIVITIES:</h4>
				<ul>
					<li>Member, University of Pittsburgh Computer Science Club: 2015-present</li>
					<li>Member, University of Pittsburgh Marching Band: 2014-present </li>
					<li>Volunteer, Life Guard Certification – Crystal Pool:  2010-2015</li>
					<li>Volunteer, Habitat for Humanity – National Honor Society: 2012</li>
				</ul>
				<br><br>

			</article>
		</div>

		
	</div>

	<?php require_once 'assets/views/footer.php' ?>
	
</body>
</html>