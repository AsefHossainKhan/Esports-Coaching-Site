const profilePicture = document.getElementById('profilePicture');
const submitButton = document.getElementById('submitButton');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
  if (fileValidation()) {

  } 
  else {
    e.preventDefault();
  }
})

function fileValidation() { 
  var filePath = profilePicture.value; 
  var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;  
  if (profilePicture.value == "") {
    alert("Please enter a Profile Picture");
    return false;
  }
  else if (!allowedExtensions.exec(filePath)){
    alert('Invalid file type'); 
    profilePicture.value = "";
    return false; 
  }
  else {
    return true;
  }
}