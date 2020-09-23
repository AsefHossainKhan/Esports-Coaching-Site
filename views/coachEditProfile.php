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
  <link rel="stylesheet" href="../assets/css/coachEditProfile.css">
  <title>Document</title>
</head>
<body onload="setData()">
  
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
    <div class="edit-profile">
      <h1>Edit Profile</h1>
      <input type="hidden" name="" id="userId" value="<?= $_SESSION["userId"];?>">
      <table>
        <tr>
          <td>Name*</td>
          <td>:</td>
          <td><input type="text" id="name" onkeyup="nameCheck()"></td>
        </tr>
        <tr>
          <td>Phone*</td>
          <td>:</td>
          <td><input type="number" id="phone" onkeyup="phoneCheck()"></td>
        </tr>
        <tr>
          <td>IGN*</td>
          <td>:</td>
          <td><input type="text" id="ign" onkeyup="ignCheck()"></td>
        </tr>
        <tr>
          <td>Discord*</td>
          <td>:</td>
          <td><input type="text" id="discord" onkeyup="discordCheck()"></td>
        </tr>
        <tr>
          <td>Steam*</td>
          <td>:</td>
          <td><input type="text" id="steam" onkeyup="steamCheck()"></td>
        </tr>
        <tr>
          <td>MMR*</td>
          <td>:</td>
          <td><input type="number" id="mmr" onkeyup="mmrCheck()"></td>
        </tr>
        <tr>
          <td>Primary Role*</td>
          <td>:</td>
          <td><input type="text" id="primaryRole" onkeyup="primaryRoleCheck()"></td>
        </tr>
        <tr>
          <td>Achievements</td>
          <td>:</td>
          <td><textarea name="" id="achievements" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
          <td>Timetable</td>
          <td>:</td>
          <td><textarea name="" id="timetable" cols="30" rows="15" placeholder="Sunday: &#10;&#13;Monday: &#10;&#13;Tuesday: &#10;&#13;Wednesday: &#10;&#13;Thursday: &#10;&#13;Friday: &#10;&#13;Saturday:"></textarea></td>
        </tr>
        <tr>
          <td>About Me</td>
          <td>:</td>
          <td><textarea name="" id="aboutMe" cols="30" rows="10"></textarea></td>
        </tr>
      </table>
      <button onclick="submits()" class="myButton">Submit</button>
      <button class="myButton">Cancel</button>
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

  <script src="../assets/js/coachEditProfile.js"></script>

  </body>
</html>