<?php
  require_once("../services/coachServices.php");
  require_once("../services/studentServices.php");
  require_once("../services/userServices.php");

  $json = $_POST['json'];
  $userData = json_decode($json);
  
  if ($userData->functionName == "submits") {
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
  }

  else if ($userData->functionName == "usernameCheck") {
    $username = $userData->username;

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

  }

  else if ($userData->functionName == "emailCheck") {
    $email = $userData->email;

    $status = isEmailUnique($email);
    if ($status == true) {
      echo "unique";
    }
    else if ($status == false) {
      echo "not unique";
    }
    else {
      echo $status;
    }
    
  }

?>