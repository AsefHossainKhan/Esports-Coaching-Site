<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>Setting</title>

	<style type="text/css">
		h2{
			font-size: 30px;
			font-weight: bold;
			color: #35424a;
		}
	input{
			margin-bottom: 20px;
			background: #f1f3f3;
			height: 25px;
			width: 200px;
			border-radius: 3px;
			border: 1px solid #f75e34; 
	
		}
		#btn{
			  font-size: 15px;
			  height: 30px;
			  background: #f4f4f4;
			  border: none;
			  border: 1px solid #f75e34;
			  border-radius: 3px;
			  padding-left: 20px;
			  padding-right: 20px;
			  color: #f75e34;
			  font-weight:bold;
			  margin-top: 10px;

			  margin-bottom: 20px;
		}

	</style>


</head>
<body>
	<h2>Change Password</h2>
	<label>Current Password</label><br>
	<input type="text" name="present_pass" value=""><br>
	<label>New Password</label><br>
	<input type="text" name="new_pass" value=""><br>
	<input type="submit" id = "btn" name="update" value="update">
</body>
</html>