
<?php
  include_once '../controllers/CoachData.php';
?>


<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	 <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>	

    <?php
		include 'header.php';
	?>

	<section id="showcase" style="background:url('../res/controller.jpg') no-repeat 0 -200px; background-size: cover;">

      <div class="container">
        <h1>Featured Masters</h1>

        <?php
        for ($key=0; $key <3 ; $key++)
         { 
          
                echo "<div class = \"box\" >";
             echo "<img src=\"".$coaches[$key]['profilePicture']."\">" ;
             echo "<h3 onclick=\"getCoach(".$coaches[$key]['userId'].");\">".$coaches[$key]['name']."</h3>";

             echo "<p>".$coaches[$key]['mmr']."</p>";
             echo "<p>Active Streamer<br>Fortnite Master</p>";
             echo "</div>";
        }
        ?>

        <!--div class = "box" >
		<img src="../res/man-avatar1.jpg"> 
			<h3 onclick="getCoach('MR.Dis');">Mr.Dis</h3>
			<p>* * * * *</p>
			<p>Active Streamer<br>Fortnite Master</p>
		</div>

		<div class = "box" >
			<img src="../res/woman-avatar.jpg">
			<h3>Panda</h3>
			<p>* * * *</p>
			<p>Active Streamer<br>Dota2 Master</p>
		</div>

		<div class = "box" >
			<img src="../res/man-avatar2.jpg">
			<h3>Ninja</h3>
			<p>* * * * *</p>
			<p>Active Streamer<br>Fortnite & PUBG Master</p>
		</div-->

      </div>
    </section> 
    <section> 
    	<div id="featured-master-info" >

             <p id="coachname"></p>
             <p id="aboutme"></p>
             <p id="coachmmr"></p>
             <p id="coachphone"></p>
             <p id="coachdiscord"></p>
      </div>	

    </section>
    

    <section id="newsletter">
      <div class="container">
        <h1 >Games you want to Master?&nbsp&nbsp</h1>
        <!--form-->
	 		<select>
                <option value="PlayerUnknown's BattelGround">PlayerUnknown's BattelGround</option>
                <option value="CS:GO">CS:GO</option>
                <option value="DOTA2">DOTA2</option>
                <option value="Fortnite">Fortnite</option>
            </select>
            <button type="button" class = "btn-1" onclick="master_info()" >Find Master</button>
        <!--/form-->
      </div>
    </section>
    <section>
    	<div id="searched-master-info">
            <table id="showmaster"></table>
      </div>	
    </section>




    <section id="review">
      <div class="container">
        <h1>Top Reviews<hr width="300px"></h1>
      </div>
      <div id="review-data">
          
      </div>


    </section>



	<?php
		include 'footer.php';
	?>
  <script type="text/javascript" src="../assets/js/coachScript.js"></script>
  <script type="text/javascript" src="../assets/js/masterCoach.js"></script>

</body>
</html>
	