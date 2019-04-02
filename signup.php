<!DOCTYPE html>


<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?>
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
		<legend> New User Signup:</legend>
		<form action="signup-submit.php" method = "POST">
			<fieldset>
				<label>Name:</label> <input type="text" name="name" size="16"><br>
				Gender: <input type="radio" name="gender"
				<?php if (isset($gender) && $gender=="female") 
					echo "checked";
				?>
				value="female">Female
				<input type="radio" name="gender"
				<?php if (isset($gender) && $gender=="male") 
					echo "checked";
				?>
				value="male">Male<br>
				Age: <input type="text" name="Age" size="6" maxlength="2"><br>
				<label for="Personality" href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Personality Type:</a></label> <input type= "text" name="Personality" maxlength="4" label="http://www.humanmetrics.com/cgi-win/JTypes2.asp" >
				<br>
				Favorite OS: <select name="favOS">
  								<option value="">Select...</option>
  								<option value="Windows">Windows</option>
  								<option value="MacOsX">Mac OS X</option>
  								<option value="Linux">Linux</option>
							</select><br>

				Seeking Age: <input type="text" size="6" name="min" placeholder="min"> <input size="6" type="text" name='max' placeholder="max"><br>

				<input type="submit" value="Sign Up">
			</fieldset>
		</form>



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