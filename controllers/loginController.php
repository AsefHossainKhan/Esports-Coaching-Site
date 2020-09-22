<?php
  require_once("../services/userServices.php");
  $json = $_POST['json'];
  $userData = json_decode($json);
  
  $rememberMe = $userData->rememberMe;
  $username = $userData->username;
  $password = $userData->password;

  class returnData {

  }
  $returnData = new returnData();

  if ($rememberMe) {
    $status = validateUserWithCookie($username,$password);
  }
  else {
    $status = validateUser($username,$password);
  }

  $returnData->status = $status;



	header("content-type: application/json");
	echo json_encode($returnData);
  

?>