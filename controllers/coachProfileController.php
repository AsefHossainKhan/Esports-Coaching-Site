<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "setData") {
    $userId = $coachData->userId;
    $returnData = getCoachData($userId);
  
    header("content-type: application/json");
    echo json_encode($returnData);
  }

  else if ($coachData->functionName == "currentPackages") {
    $userId = $coachData->userId;
    $string = justGetPackageData($userId);
    echo $string;
  }

  else if ($coachData->functionName == "currentReviews") {
    $userId = $coachData->userId;
    $string = justGetReviews($userId);
    echo $string;
  }

  else if ($coachData->functionName == "currentFeaturedReviews") {
    $userId = $coachData->userId;
    $string = justGetFeaturedReviews($userId);
    echo $string;
  }
?>