const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const rememberMe = document.getElementById('rememberMe');


function submits() {
  if (usernameCheck() && passwordCheck()) {
    var userData = {
      'rememberMe' : rememberMe.checked,
      'username' : usernameCheck(),
      'password' : passwordCheck()
    };

    userData = JSON.stringify(userData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/loginController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.responseType = "json";
    xhttp.send('json='+userData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        alert(this.response.status);
        if (this.response.status == "success") {
          location.replace("../views/indexUser.php");
        }
      }
    }
  }
  else {
    alert('Login failed');
  }
}

function usernameCheck() {
  const usernameValue = username.value.trim();

  if(usernameValue === '') {
    // add error class
    setErrorFor(username, 'Username cannot be blank');
    return false;
  } else {
    // add success class
    setSuccessFor(username);
    return usernameValue;
  }
}


function passwordCheck() {
  const passwordValue = password.value.trim();
  if (passwordValue === '') {
    setErrorFor(password, 'Password cannot be blank');
    return false;
  } 
  else if (passwordValue.length < 8) {
    setErrorFor(password, 'Password must be a minimum of 8 characters');
    return false;
  }
  else {
    setSuccessFor(password);
    return passwordValue;
  }

}


function setErrorFor(input, message) {
  const formControl = input.parentElement; //.form-control
  const small = formControl.querySelector('small');

  // add error message inside small
  small.innerText = message;

  //add error class
  formControl.className = 'form-control error';
}

function setSuccessFor(input) {
  const formControl = input.parentElement; //.form-control
  formControl.className = 'form-control success';
}