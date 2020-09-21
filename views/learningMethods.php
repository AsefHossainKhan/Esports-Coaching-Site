
<?php
include_once '../controllers/DiscordData.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style type="text/css">
		h2{
			font-size: 30px;
			font-weight: bold;
			color: #35424a;
		}
	#discordfield{
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
	<h2>Discord Id</h2>
	<form action="#" method="GET">
	<input type="text" id="discordfield" name="discord" value="<?php echo $discord[0]['discord'];?>">
	<br>
	<input type="submit" id = "btn" name="Update" value="Update" >
	<br>

	<!--p id="msg" style="color: red;"></p-->
		
	</form>
<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>