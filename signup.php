<!DOCTYPE html>

<!-- 
<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?> -->
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
		
		<div>
		<legend>New User Signup:</legend>
		<form action="signup-submit.php" method="post">
			<fieldset class="column">
				<label class="left">Name:</label> <input type="text" name="name" size="16"><br>
				<label class="left">Gender:</label> <input type="radio" name="gender"
				
				value="F">Female
				<input type="radio" name="gender"
				
				value="M">Male<br>
				<label class="left">Age:</label><input type="text" name="Age" size="6" maxlength="2"><br>
				<label class="left">Personality Type:</label><input type= "text" name="Personality" size="6" maxlength="4"><a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Dont know your type?)</a>
				<br>
				<label class="left">Favorite OS:</label><select name="favOS">
  								<option value="">Select...</option>
  								<option value="Windows">Windows</option>
  								<option value="MacOsX">Mac OS X</option>
  								<option value="Linux">Linux</option>
							</select><br>

				<label class="left">Seeking Age:</label><input type="text" size="6" name="min" placeholder="min">to<input size="6" type="text" name='max' placeholder="max"><br>

				<input type="submit" value="Sign Up">
			</fieldset>
		</form>

		<form action="signup-submit.php" method="post" enctype="multipart/form-data">
			<fieldset class="column">
    	<label class="left">Browse Image:</label>
    	<input type="file" name="fileToUpload" id="fileToUpload">
    	<input type="submit" value="Upload Image" name="submit">
    </fieldset>
</form>
</div>



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