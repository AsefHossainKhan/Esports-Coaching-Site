<?php
  require_once("../services/coachServices.php");
  require_once("../services/studentServices.php");

  $json = $_POST['json'];
  $userData = json_decode($json);
  
  $username = $userData->username;
  $name = $userData->name;
  $email = $userData->email;
  $password = $userData->password;
  $usertype = $userData->usertype;

  class returnData {

  }
  $returnData = new returnData();


  if ($usertype == "Coach") {
    $status = registerCoach($username,$name,$email,$password);
    if ($status == "success") {
      $returnData->status = $status;
    }
    else {
      $returnData->status = $status;
    }
  }
  if ($usertype == "Student") {
    $status = registerStudent($username,$name,$email,$password);
    if ($status == "success") {
      $returnData->status = $status;
    }
    else {
      $returnData->status = $status;
    }
  }

  


	header("content-type: application/json");
	echo json_encode($returnData);
  

?>