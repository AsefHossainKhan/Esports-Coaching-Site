 var xhttp;
 function master_info(){
	//console.log(id);
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {

			    	 var data= JSON.parse(this.responseText);
			    	
			    var table="<tr><th>Name</th><th>Rating</th><th>Visit</th></tr>";
				
				  for (i = 0; i <data.length; i++) { 
				     table += "<tr><td>" +
				    data[i].name +
				    "</td><td>" +
				    data[i].mmr +
				    "</td><td>"+
				    "<a href=\"../views/coachProfile.php?q="+data[i].userId+
				    "\">Go</a>" +
				    "</td></tr>";

				  }
				  document.getElementById("showmaster").innerHTML = table;
			      console.log(table);

			    }
			  };

			 
			  xhttp.open("GET", "../controllers/allcoach.php", true);
			  xhttp.send();
         }