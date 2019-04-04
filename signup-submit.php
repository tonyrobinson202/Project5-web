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
		<?php 
			$name = $gender = $age = $personality = $favOS = $min = $max = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_POST["name"];
				$gender = $_POST["gender"];
				$age = $_POST["Age"];
				$personality = $_POST["Personality"];
				$favOS = $_POST["favOS"];
				$min = $_POST["min"];
				$max = $_POST["max"];
			}

			$valid = 1;
			if (empty($name)){
				$valid=0;
			}
			if($age < 0 or $age>99){
				$valid=0;
			}
			if (!$gender[0]==="M" and !$gender[0]==="F"){ 
				$valid=0; 
			}
			if ($personality[0]!=="I" and $personality[0]!=="E"){
				$valid=0;
			}
			if ($personality[1]!=="N" and $personality[1]!=="S"){
				$valid=0;
			}
			if ($personality[2]!=="F" and $personality[2]!=="T"){
				$valid=0;
			}
			if (strcmp($personality[3],"P")!==0 and strcmp($personality[3],"J")!==0){
				$valid=0;
			}
			if ($favOS!=="Linux" and $favOS!=="Windows" and trim($favOS)!=="MacOsX"){
				$valid=0;
			}
			if ($min < 0 or $max > 99){
				$valid=0;
			}
			if ($max < 0 or $max > 99){
				$valid=0;
			}
			if( strpos(file_get_contents("singles.txt"),$name) !== false) {
				$valid=0;
				echo "Someone has already registered with this name. <br/>";
    	}		

			if ($valid==1){			
				//	file_put_contents('Images/', $pic);
				$input = "\r\n" . $_POST['name'] .',' . $_POST['gender'] .',' . $_POST['Age'] .',' . $_POST['Personality'] .',' . $_POST["favOS"] .',' . $_POST["min"] .',' . $_POST["max"];
				file_put_contents("singles.txt", $input, FILE_APPEND);
				
				echo "Thank You! <br />";
				echo "Welcome to Match, ". $_POST['name']. "!<br/>"; 
				echo "now ". "<a href='matches.php'>log in to view your matches!</a>";
			} 
			else {
				echo "Error, try again.";
			}			

		?> 
   
   <?php
   	$pic = $_POST['fileToUpload'];
   	$pic = strtolower($pic);
	$pic = str_replace(' ', '_', $pic). '.jpg';
   	
	$target_dir = "Images/";
	$target_file = $target_dir . basename($_FILES[$pic]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if (move_uploaded_file($_FILES[$pic]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES[$pic]["name"]). " has been uploaded.";
	}
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