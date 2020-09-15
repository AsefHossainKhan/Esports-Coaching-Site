<?php
  require_once("../db/db.php");

  function isUsernameUnique($username) {
    $connection = dbConnection();
    $sql = "SELECT * FROM users WHERE userName='$username'";

    try {
      $result = mysqli_query($connection, $sql);
      if(mysqli_fetch_assoc($result)) {
        return false;
      }
      else {
        return true;
      }
    } catch (Exception $e) {
      return $e;
    }

  }

  function isEmailUnique($email) {
    $connection = dbConnection();
    $sql = "SELECT * FROM users WHERE email='$email'";

    try {
      $result = mysqli_query($connection, $sql);
      if(mysqli_fetch_assoc($result)) {
        return false;
      }
      else {
        return true;
      }
    } catch (Exception $e) {
      return $e;
    }

  }
?>