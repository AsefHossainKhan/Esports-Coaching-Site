<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
//$id=$_SESSION['id'];
$id=$_SESSION['userId'];
include_once '../services/DBService.php';
$model=new DBController();
$sql = "SELECT users.userName,users.name,users.email,students.userId, students.phone, students.IGN, students.discord,students.steam,students.profilePicture from students,users where users.userId=students.userId and users.userId=".$id;
$students=$model->read($sql);

if(isset($_POST['UpdateProfile'])){
	$image= '../res/'.basename($_FILES["image"]["name"]);
	$target_dir = "../res/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $img= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
              }   
           else {
               $img= "Sorry, there was an error uploading your file.";
             }
     if(isset($_FILES['profilePicture'])){
     	echo "string";
     }
	if (empty($_POST['studentName'])) {
		echo '<script>alert("Name Field is empty")</script>';
	}

	if (empty($_POST['username'])) {
		echo '<script>alert("username Field is empty")</script>';
	}

	if (empty($_POST['studentemail'])) {
		echo '<script>alert("studentemail Field is empty")</script>';
	}

	if (empty($_POST['studentphone'])) {
		echo '<script>alert("studentphone Field is empty")</script>';
	}

	if (empty($_POST['studentIGN'])) {
		echo '<script>alert("studentIGN Field is empty")</script>';
	}

	if (empty($_POST['studentsteam'])) {
		echo '<script>alert("studentsteam Field is empty")</script>';
	}


	else{

			$sqlupdate =" UPDATE `users`  
							SET `name`='".$_POST['studentName']."' ,
								`email`='".$_POST['studentemail']."',
								`userName`='".$_POST['username']."'

								WHERE userId=".$id;

	$sqlupdate1 =" UPDATE `students`  

					SET `phone`='".$_POST['studentphone']."', 
					`IGN`='".$_POST['studentIGN']."',
					`steam`='".$_POST['studentsteam']."',
					`profilePicture`='".$image."'
					
	
					WHERE userId=".$id;

	$model->update($sqlupdate);
	$model->update($sqlupdate1);
	$students=$model->read($sql);


	}

}


?>