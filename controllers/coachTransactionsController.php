<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $userData = json_decode($json);
  


  if ($userData->functionName == "loadData") {
    $userId = $userData->userId;
    $string = getTransactionData($userId);

    echo $string;
  }

  else if ($userData->functionName == "loadWallet") {
    $userId = $userData->userId;
    $string = getWallet($userId);

    echo $string;
  }


?>