
function doAJAXZip(){
            var apikey = "dcbDyXDAAqg4Wj0z2jZIlpFoFhSBEXQSa1wJYakyAADwUD6WX6FivkHaCAMhyCaI";
            var zip1 = $("#zip1").val();
            var zip2 = $("#zip2").val();
            var units = $("#sel").val();
            var murray = {"mile":253,"km":407}
            if(zip1==""||zip2==""){
               $("#output").html("Enter a Zip")
               if(zip1==""){
                   $("#zip1").focus();
               }
               else{
                   $("#zip2").focus();
               }
            }
            else{
			$.ajax({
			    
				url:"https://www.zipcodeapi.com/rest/" + apikey + "/distance.json/"+zip1+"/"+zip2+"/"+units,
				success:function(response){
					var resp = response.distance;
					console.log(resp);
					
					    $("#output").html(Math.round(resp/murray[units]*1000)/1000+" hours / "+resp+" "+units);
				
					
					$("#output").css("font-size","100px");
				}
			})
            }
		}