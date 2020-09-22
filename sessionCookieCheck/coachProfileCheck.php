<?php
  require_once ("../services/coachServices.php");
  session_start();
  $status = checkExistence($_SESSION['userId']);
  if ($status == true) {

  }
  else {
    header("Location: ../views/coachFirstProfile.php");
  }
?>