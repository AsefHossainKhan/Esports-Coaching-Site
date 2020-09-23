const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const usertype = document.getElementById('comboBox');



function submits() {
  if (usernameCheck() && nameCheck() && emailCheck() && passwordCheck() && password2Check() && usertypeCheck()) {
    var userData = {
      'functionName' : "submits",
      'username' : usernameCheck(),
      'name' : nameCheck(),
      'email' : emailCheck(),
      'password' : passwordCheck(),
      'usertype' : usertypeCheck()
    };

    userData = JSON.stringify(userData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/registrationController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.responseType = "json";
    xhttp.send('json='+userData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        // alert(this.response.status);
        if (this.response.status == "success") {
          location.replace("../views/login.php");
        }
      }
    }

  }
  else {
    alert('User registration failed');
  }
}

function usernameCheck() {
  var usernameValue = username.value.trim();



  if(usernameValue === '') {
    setErrorFor(username, 'Username cannot be blank');
    return false;
  } else {
    var userData = {
      'functionName' : "usernameCheck",
      'username' : usernameValue
    };
    userData = JSON.stringify(userData);
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/registrationController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('json='+userData);


    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        if (this.responseText == "unique") {
          setSuccessFor(username);
        }
        else if (this.responseText == "not unique") {
          setErrorFor(username, "Username is not unique");
          usernameValue = false;
        }
        else {
          setErrorFor(username, this.responseText);
          usernameValue = false;
        }
      }
    }
    return usernameValue;
  }

}

function nameCheck() {
  const nameValue = name.value.trim();
  if (nameValue === '') {
    setErrorFor(name, 'Name Cannot Be Empty');
  }
  else {
    setSuccessFor(name);
    return nameValue;
  }

}

function emailCheck() {
  const emailValue = email.value.trim();
  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
    return false;
  } 
  else if (!emailValue.includes('@') || !emailValue.includes('.com') || emailValue.lastIndexOf('@') > emailValue.lastIndexOf('.com')) {
    setErrorFor(email, 'Email is not a valid email');
    return false;
  }
  else {
    var userData = {
      'functionName' : "emailCheck",
      'email' : emailValue
    };
    userData = JSON.stringify(userData);
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/registrationController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('json='+userData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        if (this.responseText == "unique") {
          setSuccessFor(email);
        }
        else if (this.responseText == "not unique") {
          setErrorFor(email, "Email is not unique");
          emailValue = false;
        }
        else {
          setErrorFor(email, this.responseText);
          emailValue = false;
        }
      }
    }
    return emailValue;
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

function password2Check() {
  const password2Value = password2.value.trim();
  const passwordValue = password.value.trim();
  if (password2Value === '') {
    setErrorFor(password2, 'Confirm Password cannot be blank');
    return false;
  } 
  else if (passwordValue != password2Value) {
    setErrorFor(password2, 'The passwords do not match');
    return false;
  }
  else {
    setSuccessFor(password2);
    return true;
  }

}

function usertypeCheck() {
  const usertypeValue = usertype.value.trim();
  return usertypeValue;
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