<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
?>


<link rel="stylesheet" href="../assets/css/header.css">
<header>
  <div class="container">
    <div id="branding">
      <h1><span class="highlight">E-Sport Coaching</h1>
    </div>
    <nav>
      <ul>
        <li> <a href="indexUser.php">Home</a></li>
        <li> <a href=
        <?php if($_SESSION['userType'] == "Coach") { 
          echo "coachProfileMain.php";
        }
        else if ($_SESSION['userType'] == "Student") {
          echo "studentProfile.php";
        }
        ?>
        >Profile Information</a></li>
    		<li> <a href="../sessionCookieCheck/logout.php">Log out</a></li>
      </ul>
    </nav>
  </div>
</header>