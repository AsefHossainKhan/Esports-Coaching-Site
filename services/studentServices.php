<?php
  require_once("../db/db.php");

  function registerStudent($username, $name, $email, $password) {
    $connection = dbConnection();
    $sql = "INSERT INTO users VALUES ('','$username', '$name', '$email', 'Student')";
    try {
      mysqli_query($connection, $sql);
      $sql2 = "SELECT userId FROM users WHERE userName='$username'";
      $result = mysqli_query($connection, $sql2);
      $row = mysqli_fetch_assoc($result);
      $userId = $row['userId'];
      $sql3 = "INSERT INTO login VALUES ('','$userId','$password','','')";
      mysqli_query($connection, $sql3);
      return "success";
    } catch (Exception $e) {
      return $e;
    }
  }

?>