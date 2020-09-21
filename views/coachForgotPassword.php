<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/coachForgotPassword.css">
  <title>Document</title>
</head>
<body onload="setQuestion()">
  
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
    </div>
  </header>
    
  <div class="container">
    <div class="forgotPassword">
      <input type="hidden" name="" id="userId" value="<?=$_GET['userId']?>">
      <h4>Security Question</h4>
      <h4 id="securityQuestion">Security Question Here</h4>
      <h4>Answer</h4>
      <h4><input type="text" id="answer"></h4>

      <h4>New Password</h4>
      <input type="password" name="" id="password">

      <button onclick="submits()">Change Password</button>
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

  <script src="../assets/js/coachForgotPassword.js"></script>
  </body>
</html>