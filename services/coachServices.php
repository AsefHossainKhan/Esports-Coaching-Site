<?php
  require_once("../db/db.php");

  function registerCoach($username, $name, $email, $password) {
    $connection = dbConnection();
    $sql = "INSERT INTO users VALUES ('','$username', '$name', '$email', 'Coach')";
    try {
      mysqli_query($connection, $sql);
      return "success";
    } catch (Exception $e) {
      return $e;
    }
  }

?>