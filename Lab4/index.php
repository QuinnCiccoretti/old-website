<html>
<head>
	<title>Lab 4</title>
	<script type="text/javascript">
	var dict = "";
	function getWord(){
			var xhttp = new XMLHttpRequest();
			var input = document.getElementById("qInputL").value;
			
			xhttp.onreadystatechange = function(){
				if((this.readyState==4)&&(this.status==200)){
					resp = this.responseText;
					console.log("Resp:"+resp);
    				dict = resp;
					
				}
			}
			if(dict == ""){}
				input = input.toLowerCase();
				console.log("Input (PHP queried):"+input);
			 	xhttp.open("Get","./words.php?wordIn="+input,true);
			 	xhttp.send(input);
			 }
			 document.getElementById("output").innerHTML = reg(dict,input);
			
		}
	function reg(dict,n,letter){
		console.log*("Been at reg")
		if(n>1){
			var patt = "\\b\\w{" +(n-1)+"}"+letter;
	    	var re = new RegExp(patt);
	    	var arr = dict.match(re);
    	}
    	else{
    		var patt = "\\b"+letter+"\\w*";
	    	var re = new RegExp(patt);
	    	var arr = dict.match(re);
    	}
    	console.log("Arr:"+arr);
    	return arr;
	}
	</script>
	<style type="text/css">
	body{
		text-align: center;
		margin: auto;
		background-image: url("https://s-media-cache-ak0.pinimg.com/originals/ee/20/35/ee2035ef7ab06cf4ebb93cebc14e6512.jpg");
		background-repeat: repeat;
	}
	h2{
		font-family: Verdana;
		font-size: 60px;
	}
	#wrapper{
		background-color: rgba(255,255,255,.75);
	}
	#qInputL{
		top: -20px;
		width: 30%;
		height: 25px;
	}
	#qInputN{
		top: -20px;
		width: 30%;
		height: 25px;
	}
	</style>
</head>
<body>
	<img src="http://p3cdn4static.sharpschool.com/UserFiles/Servers/Server_550661/Image/MiddleSchool/5th%20Grade/logo_scrabble.png">
	<div id = "wrapper">
		<h2>Input the letter here:</h2> 
		<input type="text" id="qInputL"><br>
		<h2>Input n, the distance from the start of the word:</h2> 
		<input type="text" id="qInputN"><br>
		<button type = "button" onclick = "getWord()">Click</button>
		<a href="https://lit-app.herokuapp.com/Lab4/words.php?wordIn=">Link</a>
		<h2 id = "output">(Possible Words Will Appear Here)</h2>

	</div>
	</body>
</html>