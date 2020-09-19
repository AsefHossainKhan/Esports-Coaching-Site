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
        return "this username does not exist";
      }
    } catch (Exception $e) {
      return $e;
    }

  }
  function isPasswordMached($password, $confirmPassword){
    if($password !== $confirmPassword){
      return false;
    }else{
      return true;
    }
  }

  function createUser($username, $name, $email, $password, $userType){
    $connection = dbConnection(); 

    $sql = "INSERT INTO users(userName,name,email,userType) VALUES('".$username."','".$name."','".$email."','".$userType."')";
    $result = mysqli_query($connection, $sql);

    $sql2 = "SELECT UserId FROM users WHERE userName='".$username."' and name='".$name."' and email='".$email."' LIMIT 1"; 
    $result2 = mysqli_query($connection, $sql2);
    $fetch = mysqli_fetch_assoc($result2);

    $sql3 = "INSERT INTO login(userId,password) VALUES('".$fetch["UserId"]."','".$password."')";
    mysqli_query($connection, $sql3);
  }
?>