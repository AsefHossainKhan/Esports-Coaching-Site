<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $reviewsData = json_decode($json);
  


  if ($reviewsData->functionName == "currentReviews") {
    $userId = $reviewsData->userId;
    $string = getReviewsData($userId);

    echo $string;
  }

  else if ($reviewsData->functionName == "features") {
    $reviewsId = $reviewsData->reviewsId;

    $status = featureReview($reviewsId);

    echo $status;
  }

?>