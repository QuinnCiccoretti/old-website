<html>
<head>
	<title>Lab 4</title>
	<script type="text/javascript">
	function getWord(){
			var xhttp = new XMLHttpRequest();
			var input = document.getElementById("qInput").value;
			xhttp.onreadystatechange = function(){
				if((this.readyState==4)&&(this.status==200)){
					resp = this.responseText;
					console.log(resp);
					
    				var patt1 = "/\w*" + input+"\w*/g";
    				var arr = resp.match(patt1);
					document.getElementById("output").innerHTML = arr;
				}
			}
				input = input.toLowerCase();
			 	xhttp.open("Get","./words.php?wordIn="+input,true)
			 	xhttp.send(input);
			
		}
	</script>
</head>
<body>
	First name: <input type="text" id="qInput"><br>
	<button type = "button" onclick = "getWord()">Click</button>
	<a href="https://lit-app.herokuapp.com/Lab4/words.php?wordIn=">Link</a>
	<h2 id = "output"></h2>
	</body>
</html>