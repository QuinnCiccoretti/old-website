<html>
<head>
	<title>Words</title>
</head>
<body>
	<?php
		 $words = file_get_contents(words.txt);
		 $wordIn = $_REQUEST["wordIn"];
		echo $words;
		
?>
</body>
</html>
