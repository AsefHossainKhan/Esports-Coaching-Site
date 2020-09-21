<?php
include_once '../services/DBService.php';
$model=new DBController();
$sqldiscord = "SELECT discord from students WHERE userId=12";
$discord=$model->read($sqldiscord);
/*if (isset($_GET['Update'])) {
	$sqldiscordupdate = "UPDATE `students` SET `discord`='".$_GET['discord']."' WHERE userId=10";
	echo $sql;
	

	$model->update($sqldiscordupdate);
	$discord=$model->read($sqldiscord);


}*/


?>
