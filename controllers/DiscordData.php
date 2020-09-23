<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
include_once '../services/DBService.php';
$model=new DBController();
$id=$_SESSION['userId'];
$sqldiscord = "SELECT discord from students WHERE userId='$id'";
$discord=$model->read($sqldiscord);
/*if (isset($_GET['Update'])) {
	$sqldiscordupdate = "UPDATE `students` SET `discord`='".$_GET['discord']."' WHERE userId=10";
	echo $sql;
	

	$model->update($sqldiscordupdate);
	$discord=$model->read($sqldiscord);


}*/


?>
