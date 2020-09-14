const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const usertype = document.getElementById('comboBox');



function submits() {
  if (usernameCheck() && nameCheck() && emailCheck() && passwordCheck() && password2Check() && userTypeCheck()) {
    alert('User successfully registered');
  }
  else {
    alert('User registration failed');
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
    return true;
  }
}

function nameCheck() {
  const nameValue = name.value.trim();
  setSuccessFor(name);
  return true;
}

function emailCheck() {
  const emailValue = email.value.trim();
  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
    return false;

  } else {
    setSuccessFor(email);
    return true;
  }
}

function passwordCheck() {
  const passwordValue = password.value.trim();
  if (passwordValue === '') {
    setErrorFor(password, 'Password cannot be blank');
    return false;
  } 
  else if (passwordValue.length <= 8) {
    setErrorFor(password, 'Password cannot be longer than 8 characters');
    return false;
  }
  else {
    setSuccessFor(password);
    return true;
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

function userTypeCheck() {
  return true;
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