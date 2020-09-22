<?php
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "submits"){
    $email = $coachData->email;

    
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = doesEmailExist($email);
    
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }

?>