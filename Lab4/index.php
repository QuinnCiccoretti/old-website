<html>
<head>
	<title>Lab 4</title>
</head>
<body>
	First name: <input type="text" id="quinnput"><br>
	<?php
		$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
		$words = array ();
		// Output one line until end-of-file
		while(!feof($myfile)) {
		   
		   $words[fgets($myfile) . ""]= 1;
		}
		fclose($myfile);
		$wordIn = $_REQUEST["wordIn"];
		
			echo array_key_exists($wordIn,$words)
		
?>
	</body>
</html>