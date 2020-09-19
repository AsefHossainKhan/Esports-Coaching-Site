<?php

require_once("../db/db.php");

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