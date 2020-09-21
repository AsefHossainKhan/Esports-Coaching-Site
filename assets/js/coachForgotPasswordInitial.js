const username = document.getElementById('username');

function submits() {
  usernameValue = username.value.trim();

  if (usernameValue === '') {
    alert ('Please enter a username');
  }
  else {
    var coachData = {
      'functionName' : "submits",
      'username' : usernameValue,
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
        if (this.response.status == "this username does not exist") {
          alert(this.response.status);
        }
        else {
          location.replace ("../views/coachForgotPassword.php?userId="+this.response.status);
        }
      }
    }
  }
}
