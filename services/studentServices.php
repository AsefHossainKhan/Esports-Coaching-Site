<?php
  require_once("../db/db.php");

  function registerStudent($username, $name, $email, $password) {
    $connection = dbConnection();
    $sql = "INSERT INTO users VALUES ('','$username', '$name', '$email', 'Student')";
    try {
      mysqli_query($connection, $sql);
      return "success";
    } catch (Exception $e) {
      return $e;
    }
  }

?>