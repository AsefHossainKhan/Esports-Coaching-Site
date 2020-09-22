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
<body>
  
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">E-Sport Coaching</h1>
        </div>
        <nav>
          <ul>
            <li> <a href="indexUser.php">Home</a></li>
            <li> <a href="../sessionCookieCheck/logout.php">Log out</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    
    
  <div class="container">
    <div class="edit-profile">
      <h1>First Time Setup</h1>
      <input type="hidden" name="" id="userId" value="<?= $_SESSION["userId"];?>">
      <table>
        <tr>
          <td>Phone*</td>
          <td>:</td>
          <td><input type="number" id="phone"></td>
        </tr>
        <tr>
          <td>IGN*</td>
          <td>:</td>
          <td><input type="text" id="ign"></td>
        </tr>
        <tr>
          <td>Discord*</td>
          <td>:</td>
          <td><input type="text" id="discord"></td>
        </tr>
        <tr>
          <td>Steam*</td>
          <td>:</td>
          <td><input type="text" id="steam"></td>
        </tr>
        <tr>
          <td>MMR*</td>
          <td>:</td>
          <td><input type="number" id="mmr"></td>
        </tr>
        <tr>
          <td>Primary Role*</td>
          <td>:</td>
          <td><input type="text" id="primaryRole"></td>
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
        <tr>
          <td>Security Question*</td>
          <td>:</td>
          <td><input type="text" id="securityQuestion"></td>
        </tr>
        <tr>
          <td>Answer*</td>
          <td>:</td>
          <td><input type="text" id="answer"></td>
        </tr>
      </table>
      <button onclick="submits()" class="myButton">Submit</button>
      <a href="indexUser.php" style="text-decoration: none;"><button class="myButton">Cancel</button></a>
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

  <script src="../assets/js/coachFirstProfile.js"></script>

  </body>
</html>