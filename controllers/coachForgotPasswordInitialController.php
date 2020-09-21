<?php
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "submits"){
    $username = $coachData->username;

    
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = doesUsernameExist($username);
    
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }

?>