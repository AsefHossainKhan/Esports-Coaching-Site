const email = document.getElementById('email');

function submits() {
  emailValue = email.value.trim();

  if (emailValue === '') {
    alert ('Please enter a email');
  }
  else {
    var coachData = {
      'functionName' : "submits",
      'email' : emailValue,
    };

    coachData = JSON.stringify(coachData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/coachForgotPasswordInitialController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.responseType = "json";
    xhttp.send('json='+coachData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        // alert(this.response.status);
        if (this.response.status == "this email does not exist") {
          alert(this.response.status);
        }
        else {
          location.replace ("../views/forgotPassword.php?userId="+this.response.status);
        }
      }
    }
  }
}
