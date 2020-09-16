<?php
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $userData = json_decode($json);
  
  $username = $userData->username;
  $password = $userData->password;

  class returnData {

  }
  $returnData = new returnData();


  $status = validateUser($username,$password);

  $returnData->status = $status;



	header("content-type: application/json");
	echo json_encode($returnData);
  

?>