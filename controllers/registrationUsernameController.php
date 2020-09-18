<?php
  require_once("../services/userServices.php");

  $username = $_POST["username"];

  $status = isUsernameUnique($username);
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