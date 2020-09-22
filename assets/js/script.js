function setting(){

				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      document.getElementById("update_discord").innerHTML = this.responseText;
				    }
				  };

			  xhttp.open('POST', "setting.php", true);
			  xhttp.send();
			}

function learningMethods(){

	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("update_discord").innerHTML = this.responseText;
	    }
	  };

  xhttp.open('POST', "learningMethods.php", true);
  xhttp.send();
}

/*function Validation(){
	var x= document.getElementById("discordfield").value;
	var studentName = document.getElementByName("studentName").value;

                if (x == "") {
                    document.getElementById('msg').innerHTML="Can not be empty";
                   return false;     
                } 

                if (studentName == "") {
                	alart(There must be name);
                }       
}*/
