<html>
<head>
	<title>Lab 4</title>
	<script type="text/javascript">
	function getWord(){
			var xhttp = new XMLHttpRequest();
			var input = document.getElementById("qInput").value;
			xhttp.onreadystatechange = function(){
				if((this.readyState==4)&&(this.status==200)){
					console.log(this.responseText);
					
				}
			}
			
			 	xhttp.open("Get","https://lit-app.herokuapp.com/words.php?query="+input,true)
			 	xhttp.send(input);
			
		}
	</script>
</head>
<body>
	First name: <input type="text" id="qInput"><br>
	<button type = "button" onclick = "getWord()">Click</button>
	</body>
</html>