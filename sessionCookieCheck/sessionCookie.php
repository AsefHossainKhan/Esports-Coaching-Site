<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION["userId"])) {
        
    }
    else if (isset($_COOKIE["userId"])) {
      $_SESSION['userId'] = $_COOKIE["userId"];
      $_SESSION['username'] = $_COOKIE['username'];
      $_SESSION['userType'] = $_COOKIE['userType'];
    }
    else {
      if ($_SERVER['PHP_SELF'] == "/webtech_final_project/views/index.php"){
      }
      else {
        header("location: ../views/index.php");
      }
    }
?>
