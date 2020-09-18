<?php
  require_once("../db/db.php");
  $connection = dbConnection();
  $sql = "SELECT userId FROM users WHERE userName='asefs'";
  try {
    $result = mysqli_query($connection, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
      $userId = $row['userId'];
      $sql2 = "SELECT password FROM login WHERE userId='$userId'";
      $result2 = mysqli_query($connection, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      if ($row2['password'] == '123123123') {
        echo "success";
      }
      else {
        echo "username and password don't match";
      }
    }
    else {
      echo "this username does not exist";
    }
  } catch (Exception $e) {
    return $e;
  }

?>