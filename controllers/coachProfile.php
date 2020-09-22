<?php
    require_once('../services/DBService.php');
	 $db=new DBController();
	 //$sql="Select * from tutor where id=".$_GET['q'];
	 $sql = "SELECT users.name,coaches.mmr,coaches.aboutMe,coaches.phone,coaches.discord from coaches,users where coaches.userId=users.userId and users.userId=".$_GET['q'];
     $profile=$db->read($sql);
     echo json_encode($profile[0]);
     
     exit();

 ?>
	