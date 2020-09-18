<?php
  require_once("../services/userServices.php");

  $email = $_POST["email"];

  $status = isEmailUnique($email);
  if ($status == true) {
    echo "unique";
  }
  else if ($status == false) {
    echo "not unique";
  }
  else {
    echo $status;
  }
  
?>