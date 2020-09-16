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

        <div class = "box" >
		<img src="../res/man-avatar1.jpg">
			<h3>Mr.Dis</h3>
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
		</div>

      </div>
    </section> 
    <section>
    	<div id="featured-master-info"></div>	
    </section>
    

    <section id="newsletter">
      <div class="container">
        <h1>Game that you want to Master!</h1>
        <form>
	 		<select>
                <option value="PlayerUnknown's BattelGround">PlayerUnknown's BattelGround</option>
                <option value="CS:GO">CS:GO</option>
                <option value="DOTA2">DOTA2</option>
                <option value="Fortnite">Fortnite</option>
            </select>
            <button class = "btn-1">Find Master</button>
        </form>
      </div>
    </section>
    <section>
    	<div id="searched-master-info"></div>	
    </section>

    <section id="review">
      <div class="container">
        <h1>Top Reviews</h1>
      </div>


    </section>






	<?php
		include 'footer.php';
	?>

</body>
</html>
	