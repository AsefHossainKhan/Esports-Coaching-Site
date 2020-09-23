<?php
require_once '../sessionCookieCheck/sessionCookie.php';
require_once ("../sessionCookieCheck/coachProfileCheck.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/coachProfile.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coach Profile</title>
</head>
<body onload="setData();setPackages();setReviews();setFeaturedReviews()">
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">E-Sport Coaching</h1>
      </div>
      <nav>
        <ul>
          <li> <a href="indexUser.php">Home</a></li>
          <li> <a href="coachEditProfile.php">Edit Profile</a></li>
          <li> <a href="coachReviews.php">Reviews</a></li>
          <li> <a href="coachTransactions.php">Transactions</a></li>
          <li> <a href="coachResetPassword.php">Reset Password</a></li>
          <li> <a href="../sessionCookieCheck/logout.php">Log out</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="container">
    <input type="hidden" name="" id="userId" value="<?= $_SESSION["userId"];?>">
    <div class="firstRow">
      <div class="profile-name">
        <div id="justprofileandname">
          <img src="" alt="profile-avatar" id="profileAvatar">
          <div>
            <h3 id="profileGameName">Gamer Name</h3>
            <h3 id="profileFullName">Full Name </h3>
          </div>
        </div>
        <a href="coachProfilePicture.php" style="text-decoration: none;"><button class="myButton">Change Profile Picture</button></a>
      </div>
      
      <div class="packages">
        <h1>Packages</h1>
        <p id="rowData"></p>
          <a href="coachPackages.php" style="text-decoration: none;"><Button class="myButton">Edit Packages</Button></a>
      </div>
    </div>
    
    <div class="secondRow">
      <div class="achievements">
        <h1>Achievements</h1>
        <pre id = "achievements">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam officiis distinctio maiores deleniti quis cum tempora animi, accusamus corporis quas nostrum a quod veniam tenetur reprehenderit enim temporibus facere assumenda!</pre>
      </div>
      
      <div class="availability">
        <h1>Availability</h1>
        <pre id = "availability">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</pre>
      </div>
    </div>

    <div class="thirdRow">
      <div class="about">
        <h1>About</h1>
        <pre id="about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</pre>
      </div>
    </div>

    <div class="fourthRow">
      <div class="featuredReview">
        <h1>Featured Review</h1>
        <pre id="featuredReview">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</pre>
      </div>
    </div>

    <div class="fifthRow">
      <div class="reviews">
        <h1>Reviews</h1>
        <pre id = "reviews">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam beatae nobis aspernatur assumenda, similique deserunt. Rerum molestiae adipisci alias illum! Et impedit corporis repellendus adipisci ut itaque nesciunt earum rerum.</pre>
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

  <script src="../assets/js/coachProfile.js"></script>

</body>
</html>