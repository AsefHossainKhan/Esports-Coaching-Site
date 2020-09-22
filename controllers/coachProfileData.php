<?php
$id=$_GET['q'];
include_once '../services/DBService.php';
$model=new DBController();
$sql = "SELECT users.userId,users.name,users.userName,coaches.profilePicture,coaches.mmr from coaches,users where users.userId=coaches.userId and coaches.userId=".$id;
$coaches=$model->read($sql);
$sqlpackage = "SELECT * FROM `packages` WHERE userId=".$id;
$packages=$model->read($sqlpackage);



?>