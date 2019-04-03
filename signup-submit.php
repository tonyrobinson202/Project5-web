<!DOCTYPE html>

    <!-- $gender = $_POST['gender'];
    $age = $_POST['Age'];
    $personality = $_POST['Personality'];
    $OS = $_POST["favOS"];
    $min = $_POST["min"];
    $max = $_POST["max"]; -->

    
<html>

	<!-- shared page top HTML -->
	
	<head>
		<title>Match</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="match.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="bannerarea">
			<img src="match.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
		<br />
		<?php echo "Thank You! <br />"?>  
		<?php 
			echo "Welcome to Match, ". $_POST['name']. "!<br/>"; 
			?> 
     <?php echo "now ". "<a href='matches.php'>log in to view your matches!</a>"; ?> 
   
   <?php
    $input = "\r\n" . $_POST['name'] .',' . $_POST['gender'] .',' . $_POST['Age'] .',' . $_POST['Personality'] .',' . $_POST["favOS"] .',' . $_POST["min"] .',' . $_POST["max"];
		file_put_contents("singles.txt", $input, FILE_APPEND);
		?>
    <!-- $myfile = fopen("singles.txt", "w") -->
		<br />
		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the geek love to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright Match Inc.
			</p>
			
			<ul>
				<li>
					<a href="index.php">
						<img src="back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

	</body>
</html>