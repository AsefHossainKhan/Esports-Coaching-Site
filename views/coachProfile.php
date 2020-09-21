<?php


include_once '../controllers/coachProfileData.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/coachProfileV2.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">E-Sport Coaching</h1>
      </div>
      <nav>
        <ul>
          <li> <a href="#">Home</a></li>
          <li> <a href="#">Sign in</a></li>
          <li> <a href="#">Log in</a></li>
          <li> <a href="#">Log out</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="container">
    <div class="firstRow">
      <div class="profile-name">
        <img src="<?php echo $coaches[0]['profilePicture'];?>" alt="profile-avatar" id="profileAvatar">
        <h3 id="profile-name"><?php echo $coaches[0]['name']; ?> <br><hr><?php echo $coaches[0]['userName']; ?> </h3>
        <br>  
      </div>
      
      <div class="packages">
        <h1>Packages</h1>
        <?php

        foreach($packages as $key => $value) {
          echo "<div class=\"individual-package\">";
          echo "<p>".$packages[$key]['packageName']." ".
                $packages[$key]['packagePrice']."</p>";
          echo "</div>";
        }



        ?>
       


        <!--div class="individual-package">
          <p>1 ghontay 10 taka</p>
        </div>
        <div class="individual-package">
          <p>1 ghontay 10 taka</p>
        </div>
        <div class="individual-package">
          <p>1 ghontay 10 taka</p>
        </div>
        <div class="individual-package">
          <p>1 ghontay 10 taka</p>
        </div>
        <div class="individual-package">
          <p>1 ghontay 10 taka</p>
        </div-->
     
      </div>
    </div>
    
    <div class="secondRow">
      <div class="achievements">
        <h1>Achievements</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam officiis distinctio maiores deleniti quis cum tempora animi, accusamus corporis quas nostrum a quod veniam tenetur reprehenderit enim temporibus facere assumenda!</p>
      </div>
      
      <div class="availability">
        <h1>Availability</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</p>
      </div>
    </div>

    <div class="thirdRow">
      <div class="about">
        <h1>About</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</p>
      </div>
    </div>

    <div class="fourthRow">
      <div class="featuredReview">
        <h1>Featured Review</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</p>
      </div>
    </div>

    <div class="fifthRow">
      <div class="reviews">
        <h1>Reviews</h1>
        <!--p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</p-->

        <?php
        echo "<p>" .$reviews[0]['reviews']. "</p>"


        ?>
      </div>
    </div>
    
  </div>

  <footer>
    <div class = "container">
      <p>Copyright &copy; 2020 E-Sports Coaching</p>
      <h4>Contact Information</h4>
      <h5>Mail</h5>
      <p>esportc@gmail.com</p>
      <h5>Phone</h5>
      <p>01745122222</p>
  
      <h5><a href="service.php">Service</h5>
  
      <ul class = "links">
        <li> <a href="https://www.facebook.com/">
          <img src="../res/facebook_50px.png" width="50px" height="50px"></li>
  
        <li> <a href="https://www.discord.com/">
          <img src="../res/discord_50px.png" width="50px" height="50px"></li>
  
        <li> <a href="https://www.instagram.com/">
          <img src="../res/instagram_50px.png" width="50px" height="50px"></li>
  
        <li><a href="https://www.twitch.com/">
          <img src="../res/twitch_50px.png" width="50px" height="50px"></li>
         
      </ul>
    </div>
  </footer>
</body>
</html>