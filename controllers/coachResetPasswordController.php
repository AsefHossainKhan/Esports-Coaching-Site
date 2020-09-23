<?php
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "submits"){
    $userId = $coachData->userId;
    $currentPassword = $coachData->currentPassword;
    $password = $coachData->password;

    
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = coachResetPassword($userId, $currentPassword, $password);
    
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }


?>