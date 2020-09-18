<?php
  require_once("../services/coachServices.php");

  $json = $_POST['json'];
  $packageData = json_decode($json);
  
  if ($packageData->functionName == "addPackage"){
    $userId = $packageData->userId;
    $packageName = $packageData->packageName;
    $packagePrice = $packageData->packagePrice;
    $packageDuration = $packageData->packageDuration;
    
    class returnData {
  
    }
    $returnData = new returnData();
  
  
    $status = insertPackage($userId, $packageName, $packagePrice, $packageDuration);
    
    $returnData->status = $status;
  
    header("content-type: application/json");
    echo json_encode($returnData);  
  }

  else if ($packageData->functionName == "currentPackages") {
    $userId = $packageData->userId;
    $string = getPackageData($userId);

    // class returnData {
  
    // }
    // $returnData = new returnData();
    // $returnData->status = "test";

    // header("content-type: application/json");
    // echo json_encode($returnData);
    echo $string;
  }

  else if ($packageData->functionName == "deletes") {
    $packageId = $packageData->packageId;

    $status = deletePackage($packageId);

    echo $status;
  }

?>