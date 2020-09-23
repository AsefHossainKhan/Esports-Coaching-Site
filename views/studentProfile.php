<?php

  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
$id=$_SESSION['userId'];
//$id=12;
include_once '../controllers/studentProfileData.php';
require_once '../sessionCookieCheck/sessionCookie.php';


$sqldiscord = "SELECT discord from students WHERE userId=".$id;
$discord=$model->read($sqldiscord);

if (isset($_GET['Update'])) {
	if(empty($_GET['discord'])){

	echo '<script>alert("Field is empty")</script>'; 

	}
	else{
	$sqldiscordupdate = "UPDATE `students` SET `discord`='".$_GET['discord']."' WHERE userId=10";
	$model->update($sqldiscordupdate);
	$discord=$model->read($sqldiscord);
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="../assets/css/studentProfile.css">
</head>
<body>
	
    <?php
	include 'headerUser.php';
	?>

	<section class="profile">
		<div class="container">
			<div id="profile-img">
				<img src="<?php echo $students[0]['profilePicture'];?>" alt="profile image" >
				<h3 id="User-name"><?php echo $students[0]['userName'];?></h3>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="container">
			<div id="about">
				<h2>About!</h2>
				<p>Gamer Sensei coaches aren't just coaches - they're Sensei™. Every single instructor on our platform has passed our rigorous, 5-stage application process. We guarantee our pros aren't just top gamers, but also experienced teachers who will help you learn efficiently and effectively.
				</p>
			</div>
		</div>
	</section>

<section  class = "menu">
        <div class="container">
            <div id="menu">
                <ul>

                    <li> <p onclick="setting()">Settings</p></li>
                    <li> <p onclick="">My Reviews</p></li>
                    <li> <p onclick="">Achievements</p></li>
                    <li> <p onclick="learningMethods()">Learning Methods</p></li>
                    <!--li> <p onclick="">Profile Information</p></li--> 
                 </ul>
            </div>
        </div>
    </section>

	<div id = "student-info">
		
		<form name="studentForm" action="#" method="GET" onsubmit="return validateStudentForm()">

			<h4>Profile Information</h4>

		   <label for="studentName" >Name</label><br>
		   <input type="text" name="studentName" id="studentName" value="<?php echo $students[0]['name'];?>" >
		   <br>
		   <label for="username">Username</label><br>
		   <input type="text" name="username" id="username" value="<?php echo $students[0]['userName'];?>" >
		   <br>
		   <label for="studentemail" >Email</label><br>
		   <input type="email"  required name="studentemail" id="studentemail" value="<?php echo $students[0]['email'];?>" >
		   <br>
		   <label for="studentPhone" >Phone</label><br>
		   <input type="text" name="studentphone" id="studentphone" value="<?php echo $students[0]['phone'];?>" >
		   <br>
		   <label for="studentIGN" >IGN</label><br>
		   <input type="text" name="studentIGN" id="studentIGN" value="<?php echo $students[0]['IGN'];?>" >
		   <br>
		   <label for="studentsteam">steam</label><br>
		   <input type="text" name="studentsteam" id="studentsteam" value="<?php echo $students[0]['steam'];?>" >
		   <br>

		   <button type="submit" id="btn" name="UpdateProfile" value="Update">Update</button>

		</form>

	</div>


	<div id="update_discord">


	</div>

	<?php
	include 'footer.php';
	?>
	<script type="text/javascript" src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/validation_script.js"></script>
</body>
</html>