<?php

    require_once("../services/adminServices.php");

    $id = $_POST["id"];

    $result = deleteAdmin($id);
   
    showAdminList();
  

?>