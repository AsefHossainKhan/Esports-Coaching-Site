
<?php
//$id=$_SESSION['id'];
$id=12;
include_once '../services/DBService.php';
$model=new DBController();
$sql = "SELECT users.userName,users.name,users.email,students.userId, students.phone, students.IGN, students.discord,students.steam,students.profilePicture from students,users where users.userId=students.userId and users.userId=".$id;
$students=$model->read($sql);

if(isset($_GET['UpdateProfile'])){
	//$sqlupdate = "UPDATE `users` SET `name`='".$_GET['studentName']."' WHERE userId=".$id;
	if (empty($_GET['studentName'])) {
		echo '<script>alert("Name Field is empty")</script>';
	}

	if (empty($_GET['username'])) {
		echo '<script>alert("username Field is empty")</script>';
	}

	if (empty($_GET['studentemail'])) {
		echo '<script>alert("studentemail Field is empty")</script>';
	}

	if (empty($_GET['studentphone'])) {
		echo '<script>alert("studentphone Field is empty")</script>';
	}

	if (empty($_GET['studentIGN'])) {
		echo '<script>alert("studentIGN Field is empty")</script>';
	}

	if (empty($_GET['studentsteam'])) {
		echo '<script>alert("studentsteam Field is empty")</script>';
	}

	else{

			$sqlupdate =" UPDATE `users`  
							SET `name`='".$_GET['studentName']."' ,
								`email`='".$_GET['studentemail']."',
								`userName`='".$_GET['username']."'

								WHERE userId=".$id;

	$sqlupdate1 =" UPDATE `students`  

					SET `phone`='".$_GET['studentphone']."', 
					`IGN`='".$_GET['studentIGN']."',
					`steam`='".$_GET['studentsteam']."'
					
	
					WHERE userId=".$id;

	$model->update($sqlupdate);
	$model->update($sqlupdate1);
	$students=$model->read($sql);


	}

}


?>