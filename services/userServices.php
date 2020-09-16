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

  function validateUser($username,$password) {
    $connection = dbConnection();
    $sql = "SELECT userId FROM users WHERE userName='$username'";
    try {
      $result = mysqli_query($connection, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['userId'];
        $sql2 = "SELECT password FROM login WHERE userId='$userId'";
        $result2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        if ($row2['password'] == $password) {
          return "success";
        }
        else {
          return "username and password don't match";
        }
      }
      else {
        return "this username does nottttttttt exist";
      }
    } catch (Exception $e) {
      return $e;
    }

  }
?>