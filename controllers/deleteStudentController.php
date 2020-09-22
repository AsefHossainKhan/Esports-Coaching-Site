<?php

    require_once("../services/adminServices.php");

    $id = $_POST["id"];

    deleteStudent($id);
   
    $result =showStudentList();
    echo "$result";

?>