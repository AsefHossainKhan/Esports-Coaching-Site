<?php
include_once '../services/DBService.php';
$model=new DBController();
$sql = "SELECT users.userId,users.name,coaches.profilePicture,coaches.mmr from coaches,users where users.userId=coaches.userId";
$coaches=$model->read($sql);

?>