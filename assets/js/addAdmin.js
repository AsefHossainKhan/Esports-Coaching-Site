function addAdminVisible(){
    document.getElementById("showCoaches").style.visibility = "hidden";
    document.getElementById("error").style.visibility = "hidden";
    document.getElementById("showStudents").style.visibility = "hidden";
    document.getElementById("showAdmins").style.visibility = "hidden";
    document.getElementById("addAdminForm").style.visibility = "visible";
}

function addAdmin(){
    document.getElementById("error").style.visibility = "visible";

    var username = document.getElementById("username").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;


    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/addAdminController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('username='+username+'&name='+name+'&email='+email+'&password='+password+'&confirmPassword='+confirmPassword);

        xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                
                if(this.responseText == "Empty Fields Found"){
                    document.getElementById("error").innerHTML = "Empty Fields Found.";
                }
                else if(this.responseText == "username not unique"){
                    document.getElementById("error").innerHTML = "Username Exists.";
                }
                else if(this.responseText == "email not unique"){
                    document.getElementById("error").innerHTML = "Email is Not Unique.";
                }
                else if(this.responseText == "Password not mached"){
                    document.getElementById("error").innerHTML = "Password Not Mached.";
                }
                else{
                    document.getElementById("error").innerHTML = "User Created.";
                }
            }
        }
}