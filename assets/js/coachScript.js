var xhttp;

function getCoach(id)
{
	//console.log(id);
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {

			    	var data= JSON.parse(this.responseText);
			    	document.getElementById("aboutme").innerHTML = data.aboutMe;
			    	document.getElementById("coachname").innerHTML = data.name;
			    	document.getElementById("coachmmr").innerHTML = data.mmr;
			    	document.getElementById("coachphone").innerHTML = data.phone;
			    	document.getElementById("coachdiscord").innerHTML = data.discord;

			    	console.log(data);

			    }
			  };

			 
			  xhttp.open("GET", "../controllers/coachProfile.php?q="+id, true);
			  xhttp.send();
         }

