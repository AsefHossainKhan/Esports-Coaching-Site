<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  if ($coachData->functionName == "submits") {
    $userId = $coachData->userId;
    $name = $coachData->name;
    $phone = $coachData->phone;
    $ign = $coachData->ign;
    $discord = $coachData->discord;
    $steam = $coachData->steam;
    $mmr = $coachData->mmr;
    $primaryRole = $coachData->primaryRole;
    $achievements = $coachData->achievements;
    $timetable = $coachData->timetable;
    $aboutMe = $coachData->aboutMe;
  
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = updateCoach($userId, $name, $phone, $ign, $discord, $steam, $mmr, $primaryRole, $achievements, $timetable, $aboutMe);
  
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }

  else if ($coachData->functionName == "setData") {
    $userId = $coachData->userId;
    $returnData = getCoachData($userId);
  
    header("content-type: application/json");
    echo json_encode($returnData);
  }


?>