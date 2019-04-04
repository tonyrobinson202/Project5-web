<!DOCTYPE html>


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
		
		<!-- your HTML output follows -->
		<?php
			

			$myArray = array();
			$matches = array();
			$matches2 = array();
			$match = array();
			$finalMatch = array();
			echo "<b>Matches for " . $_GET["name"] . "</b>";

			$file = 'singles.txt';
			$searchfor = '/'.$_GET['name'].'/';

			$contents = file_get_contents($file);

			$pattern = preg_quote($searchfor, '/');

			$pattern = "/^.*$pattern.*\$/m";

			

if (preg_match($searchfor, $contents, $matches, PREG_OFFSET_CAPTURE)) {
    $lineNumber = count(explode("\n", substr($contents, 0, $matches[0][1])));
}

$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

				$file2 = new SplFileObject("singles.txt");
				if (!$file2->eof()) {
     			$file2->seek($lineNumber-1);
      			$content = $file2->current(); 
			}

		$myArray = explode(',', $content);
		//print_r($myArray);
		
		$content2 = $myArray;
		//echo $content2[0];
		if($content2[1]=='F'){
			$gender = '/,M,/';
		}
		else{
			$gender ='/,F,/';
		}

		$min = $content2[5];
		$max = $content2[6];
		$OS = $content2[4];

		$match;


		$pattern2 = "/^.*$pattern.*\$/m";

 	$file = fopen("singles.txt", "r");
		$start = 1;
		$newLine = 1;



$test = 1;

//$fileName = 'oldspice_guy.jpg';
		
		$dir = 'Images/';
		// if (is_dir($dir)) {
	
  //   		if ($dh = opendir($dir)) {
  //   			if($fileName = readdir($dh)){
  //   				//echo "found <br/>";
  //   				echo '<img src="Images/oldspice_guy.jpg">';
  //   				//. $dir. $fileName. ' alt='. $fileName. ' />';

  //   			}
  //       		// while (($fileName = readdir($dh)) !== false) {
  //         //   		echo "filename:" . $fileName . "<br>";
  //       		// }
  //       		closedir($dh);
  //   		}
		//}

		$size =filesize ('singles.txt'); 
		;

	//searches for the matches based on the criteria and post them
	  while($newLine < $size){
	 	if (preg_match(($gender),$contents,$matches2,PREG_OFFSET_CAPTURE, $newLine))  {
			$lineNumber = count(explode("\n", substr($contents, 0, $matches2[0][1])));
    		// echo "<br/>";
    		//echo $lineNumber;
    		//echo "<br/>";
			// }
	 		//echo $matches2[0][1];
	 		$newLine = $matches2[0][1]+1;
	 		//echo $newLine;
		}
		//echo $newLine;
		// echo "<br/>";
		//echo $lineNumber;
		$file2 = new SplFileObject("singles.txt");
				
		if (!$file2->eof()) {
     		$file2->seek($lineNumber-1);
      		$content = $file2->current();
            	//echo "Found matches!\n";
			   // echo implode(",", $matches);
			}

		$match = explode(',', $content);
		echo "<br/>";
		if($match[4]==$OS){
			
			//echo "true ";
			//print_r($match);
			// if($match[2]>$min && $match[2] < $max){

		$fileName = $match[0];
		$fileName = strtolower($fileName);
		$fileName = str_replace(' ', '_', $fileName). '.jpg';
		$fileName2 = $fileName;
		//echo $fileName. '<br/>';
		if (is_dir($dir)) {
	
    		if ($dh = opendir($dir)) {
    			if($fileName = readdir($dh)){
    				//echo "found <br/>";
    				//echo $fileName2 . ":";
    				echo '<img src="Images/'. $fileName2 .'">';
    				//echo 'src="Images/'. $fileName .'">';
    				//echo '<img src="Images/oldspice_guy.jpg">';
    				//. $dir. $fileName. ' alt='. $fileName. ' />';

    			}
        		// while (($fileName = readdir($dh)) !== false) {
          //   		echo "filename:" . $fileName . "<br>";
        		// }
        		closedir($dh);
    		}
		}




		//echo "This is it: " . $fileName . "<br/>";
		// $fileName = 'Oldspice_Guy.jpg';
		// echo $fileName;
		// $dir = 'Images/';
		// if (is_dir($dir)) {
		// 	echo "here <br/>";
  //   		if ($dh = opendir($dir)) {
  //   			echo "here2 <br/>";
  //       		while (($fileName = readdir($dh)) !== false) {
  //           		echo "filename:" . $fileName . "<br>";
  //       		}
  //       		closedir($dh);
  //   		}
		// }



			echo $match[0]. '<br/>'. '<br>';
			echo $match[1]. '<br/>';
			echo $match[2]. '<br/>';
			echo 'OS:		' . $match[4];
		//}
		}
		if($newLine == 1836){
					exit();
}
		//print_r($match);
	 }
?>
		<!-- shared page bottom HTML -->
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
