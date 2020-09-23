<?php
require_once '../sessionCookieCheck/sessionCookie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/coachPackages.css">
  <title>Coach Packages</title>
</head>
<body onload="currentPackages()">
  
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">E-Sport Coaching</h1>
        </div>
        <nav>
          <ul>
            <li> <a href="indexUser.php">Home</a></li>
            <li> <a href="coachProfileMain.php">Profile</a></li>
            <li> <a href="coachEditProfile.php">Edit Profile</a></li>
            <li> <a href="coachReviews.php">Reviews</a></li>
            <li> <a href="coachTransactions.php">Transactions</a></li>
            <li> <a href="coachResetPassword.php">Reset Password</a></li>
            <li> <a href="../sessionCookieCheck/logout.php">Log out</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    
  <div class="container">
    <div class="packages">
      <input type="hidden" name="" id="userId" value="<?= $_SESSION["userId"];?>">
      <h3>Package Name</h3>
      <input type="text" id="packageName"> <br>
      <h3>Package Price</h3>
      <input type="number" id="packagePrice"> <br>
      <h3>Package Duration</h3>
      <input type="text" id="packageDuration"> <br>
      <button onclick="addPackage()" id="addPackage">Add Package</button>
      <br>
      <h1>Current packages</h1>
      <pre id="rowData">
      </pre>
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

  <script src="../assets/js/coachPackages.js"></script>

  </body>
</html>