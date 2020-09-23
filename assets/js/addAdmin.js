function addAdminVisible(){
    document.getElementById("showCoaches").style.visibility = "hidden";
    document.getElementById("error").style.visibility = "hidden";
    document.getElementById("showStudents").style.visibility = "hidden";
    document.getElementById("showAdmins").style.visibility = "hidden";
    document.getElementById("coachApproval").style.visibility = "hidden";
    document.getElementById("addAdminForm").style.visibility = "visible";
}

function addAdmin(){
   

    

    var username = document.getElementById("username").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var question = document.getElementById("question").value;
    var answer = document.getElementById("answer").value;

    if(emailCheck() || passwordCheck() || password2Check()){
        document.getElementById("error").style.visibility = "visible";
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controllers/addAdminController.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('username='+username+'&name='+name+'&email='+email+'&password='+password+'&confirmPassword='+confirmPassword+'&question='+question+'&answer='+answer);

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
                    else if(this.responseText == "Please Enter security question and answer"){
                        document.getElementById("error").innerHTML = "Please Enter security question and answer.";
                    }
                    else{
                        document.getElementById("error").innerHTML = "User Created.";
                    }
                }
        }
    }else{
        document.getElementById("error").innerHTML = "Please fill valid informations.";
    }
}


function emailCheck(){
    document.getElementById("error").style.visibility = "visible";
    const emailValue = email.value.trim();
  if (emailValue === '') {
        document.getElementById("error").innerHTML = "Email is Empty";
        return false;
  } 
  else if (!emailValue.includes('@') || !emailValue.includes('.com') || emailValue.lastIndexOf('@') > emailValue.lastIndexOf('.com')) {
        document.getElementById("error").innerHTML = "Not Valid Email";
        return false;
  }else{
    document.getElementById("error").style.visibility = "hidden";
        return true;
  }
}

function passwordCheck() {
    document.getElementById("error").style.visibility = "visible";
    const passwordValue = password.value.trim();
    if (passwordValue === '') {
        document.getElementById("error").innerHTML = "Password Field is Empty.";
      return false;
    } 
    else if (passwordValue.length < 8) {
        document.getElementById("error").innerHTML = "Password must be a minimum of 8 characters";
      return false;
    }
    else {
        document.getElementById("error").style.visibility = "hidden";
      return true;
    }
  
  }

  function password2Check() {
    document.getElementById("error").style.visibility = "visible";
    const password2Value = confirmPassword.value.trim();
    const passwordValue = password.value.trim();
    if (password2Value === '') {
        document.getElementById("error").innerHTML = "Confirm Password Field is Empty.";
      return false;
    } 
    else if (passwordValue != password2Value) {
        document.getElementById("error").innerHTML = "Passwords Not Mached.";
      return false;
    }
    else {
      document.getElementById("error").style.visibility = "hidden";
      return true;
    }
  
  }
