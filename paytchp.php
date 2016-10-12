<html>
<head>
	<title>PHP tho</title>
	<script type="text/javascript">
		function doIt(){
			var text = document.getElementById('quinnput').value;
			document.getElementById('output').innerHTML = text;
		}
	</script>
</head>
<body>
	<button id = "button" onclick = "doIt()">Click</button>
	<div id = "output">Output here</div>
	<?php
		echo("<input id = 'quinnput'> Harambe died for our sins </input>");

	?>
</body>
</html>


