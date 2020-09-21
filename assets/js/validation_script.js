function validateStudentForm() {
  var studentName = document.forms["studentForm"]["studentName"].value;
  var username = document.forms["studentForm"]["username"].value;
  var studentemail = document.forms["studentForm"]["studentemail"].value;
  var studentphone = document.forms["studentForm"]["studentphone"].value;
  var studentIGN = document.forms["studentForm"]["studentIGN"].value;
  var studentsteam = document.forms["studentForm"]["studentsteam"].value;


  if (studentName == "") {
    alert("Name must be filled out");
    return false;
  }


  if (username == "") {
    alert("username must be filled out");
    return false;
  }


  if (email == "") {
    alert("email must be filled out");
    return false;
  }


  if (phone == "") {
    alert("phone must be filled out");
    return false;
  }


  if (studentIGN == "") {
    alert("studentIGN must be filled out");
    return false;
  }


  if (steam == "") {
    alert("steam must be filled out");
    return false;
  }


}