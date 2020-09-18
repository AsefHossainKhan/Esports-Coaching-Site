<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $coachData = json_decode($json);
  
  $userId = $coachData->userId;
  $phone = $coachData->phone;
  $ign = $coachData->ign;
  $discord = $coachData->discord;
  $steam = $coachData->steam;
  $mmr = $coachData->mmr;
  $primaryRole = $coachData->primaryRole;
  $achievements = $coachData->achievements;
  $timetable = $coachData->timetable;
  $aboutMe = $coachData->aboutMe;
  $securityQuestion = $coachData->securityQuestion;
  $answer = $coachData->answer;

  class returnData {

  }
  $returnData = new returnData();


  $status = insertCoach($userId, $phone, $ign, $discord, $steam, $mmr, $primaryRole, $achievements, $timetable, $aboutMe, $securityQuestion, $answer);

  $returnData->status = $status;

	header("content-type: application/json");
	echo json_encode($returnData);
  
?>