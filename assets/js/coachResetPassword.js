const currentPassword = document.getElementById('currentPassword');
const password = document.getElementById('password');
const userId = document.getElementById('userId');

function submits() {
  currentPasswordValue = currentPassword.value.trim();
  passwordValue = password.value.trim();
  userIdValue = userId.value.trim();

  if (currentPasswordValue === '') {
    alert ('Please enter an currentPassword');
  }
  else if (passwordValue === '') {
    alert ('Please enter a new password');
  }
  else {
    var coachData = {
      'functionName' : "submits",
      'userId' : userIdValue,
      'currentPassword' : currentPasswordValue,
      'password' : passwordValue
    };

    coachData = JSON.stringify(coachData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/coachResetPasswordController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.responseType = "json";
    xhttp.send('json='+coachData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        alert(this.response.status);
      }
    }
  }
}