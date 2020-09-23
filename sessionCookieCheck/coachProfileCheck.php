<?php
  require_once ("../services/coachServices.php");
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  $status = checkExistence($_SESSION['userId']);
  if ($status == true) {

  }
  else {
    header("Location: ../views/coachFirstProfile.php");
  }
?>