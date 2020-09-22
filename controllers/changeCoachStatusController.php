<?php

    require_once("../services/adminServices.php");

    $id = $_POST["id"];

    changeCoachStatus($id);
    $result = showCoachApproveStatus();
    echo "$result";

?>