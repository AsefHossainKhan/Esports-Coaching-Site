<?php
    require_once('../services/DBService.php');
	 $db=new DBController();
	 //$sql="Select * from tutor where id=".$_GET['q'];
	 $sql = "SELECT users.userId,users.name,coaches.mmr from coaches,users where coaches.userId=users.userId";
     $profile=$db->read($sql);
     echo json_encode($profile);
     //echo "<h2>Name </h2>"
     //echo "<input type='text' value ="$profile[0]['name']">"
     
     exit();

 ?>
	