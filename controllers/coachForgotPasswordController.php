<?php
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "submits"){
    $userId = $coachData->userId;
    $answer = $coachData->answer;
    $password = $coachData->password;

    
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = coachForgotPassword($userId, $answer, $password);
    
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }

  else if ($coachData->functionName == "setQuestion") {
    $userId = $coachData->userId;
    class returnData {
  
    }
    $returnData = new returnData();
    $returnData->securityQuestion = setQuestion($userId);

    header("content-type: application/json");
    echo json_encode($returnData);
  }


?>