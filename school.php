<?php session_start(); 

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
	
	<?php require_once 'nav.php'; ?>
	<?php require_once 'header.php'; ?>

	<div class="page-wrapper">
	
		<div class="row">
			<h1>Schoolwork</h1>
			<p>
				The following serves as the list of coursework that I have taken or will take in my studies as a Computer Engineering
				Student at the University of Pittsburgh. Check the <a href="/projects.php">projects page</a> for some samples of coding.
				The code I have written consists of Java, C, PHP, HTML/CSS, and Javascript.
			</p>
			<br><br>
			<hr>
			
			<article>
				<h2>FRESHMAN YEAR -- University of Pittsburgh at Greensburgh <br>(2013-2014)</h2>	
				<h3>Term One:</h3>
				<ul>
					<li>Engineering Analysis I 		  			- ENGR 0015</li>
					<li>General Chemistry I	+ LAB     			- CHEM 0110</li>
					<li>Physics I (Calc)       		 		    - PHYS 0174</li>
					<li>Calculus I             		  			- MATH 0220</li>
					<li>English Composition I (Engr)  			- </li>
				</ul>
				<br>
				<h3>Term Two:</h3>
				<ul>
					<li>Engineering Analysis II		  			- ENGR 0016</li>
					<li>General Chemistry II + LAB	  			- CHEM 0120</li>
					<li>Physics II (Calc) 			  			- PHYS 0174</li>
					<li>Calculus II					  			- MATH 0230</li>
					<li>English Composition II (Engr) 			- </li>
				</ul>
				<br><br>
				<hr>

				<h3>
					TRANSFERED FROM UNIVERISTY OF PITTSBURGH AT GREENSBURGH TO THE 
					UNIVERSITY OF PITTSBURGH MAIN CAMPUS
				</h3>
				<hr>

				<h2>SOPHMORE YEAR -- University of Pittsburgh <br>(2014-2015)</h2>	
				<h3>Term One:</h3>
				<ul>
					<li>Intermediate Java Programming 			- COE  0401</li>
					<li>Digital Logic			      			- COE  0132</li>
					<li>Linear Circuits & Systems I   			- COE  0031</li>
					<li>Differential Equations        			- MATH 0290</li>
					<li>Intro. To Psycology		      			- PSY	 0010</li>
				</ul>
				<br>
				<h3>Term Two:</h3>
				<ul>
					<li>Data Structures  		      			- COE  0445</li>
					<li>Computer Organization		  			- COE  0147</li>
					<li>Linear Circuits & Systems II  			- COE  0041</li>
					<li>Social Psycology              			- </li>
				</ul>
				<br>
				<h3>Term Three: (Summer 2015)</h3>
				<ul>
					<li>Algorithm's  		          		 	- COE  1501</li>
					<li>Written Proffesional Communications		- </li>
				</ul>
				<br><br>
				<hr>
				
				<h2>JUNIOR YEAR -- University of Pittsburgh <br>(2015-2016)</h2>	
				<h3>Term One:</h3>
				<ul>
					<li>Systems Software	  					- COE  0449</li>
					<li>Digital Lab			     			    - COE  0501</li>
					<li>Linear Algebra 	       		 		    - MATH </li>
					<li>Microeconomics				  			- ECON </li>
				</ul>
				<br>
				<h3>Term Two:</h3>
				<ul>
					<li>Programming For Web Apps.		  		- CS   1520</li>
					<li>Advanced Digital Design		  			- COE  </li>
					<li>Computer Architecture 			  		- CS   1541</li>
					<li>Game Theory					  			- ECON </li>
				</ul>
				<br><br>
				<hr>

				<h2>SENIOR -- University of Pittsburgh <br>(2013-2014)</h2>	
				<h3>Term One:</h3>
				<ul>
					<li>Databases			 		  			- COE  </li>
					<li>Introduction to Networks	  			- COE  </li>
					<li>Probability and Statistics (Engr)       - ENGR 0020</li>
					<li>Software Engineering             		- COE  1530</li>
					<li>Ethics						  			- </li>
				</ul>
				<br>
				<h3>Term Two:</h3>
				<ul>
					<li>Compilers					  			- COE  </li>
					<li>Operating Systems			  			- COE  </li>
					<li>The Internet of Things 		  			- COE  </li>
					<li>Open Elective (Embedded Sys) 			- </li>
					<li>Open Elective (Marching Band)			- </li>
				</ul>
				<br><br>
				<hr>

			</article>
		</div>





	</div>

	<?php require_once 'footer.php' ?>
	
</body>
</html>