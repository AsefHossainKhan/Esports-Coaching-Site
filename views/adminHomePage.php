<?php
require_once '../sessionCookieCheck/sessionCookie.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Home</title>
      <!-- <link rel="stylesheet" href="../assets/css/header.css"> -->
      <link rel="stylesheet" href="../assets/css/adminHomePage.css">
      <script src="../assets/js/addAdmin.js"></script>
      <script src="../assets/js/showCoaches.js"></script>
      <script src="../assets/js/deleteCoaches.js"></script>
      <script src="../assets/js/showStudents.js"></script>
      <script src="../assets/js/deleteStudents.js"></script>
      <script src="../assets/js/showAdmins.js"></script>
      <script src="../assets/js/deleteAdmins.js"></script>
      <script src="../assets/js/coachApproval.js"></script>
      <script src="../assets/js/changeCoachStatus.js"></script>
  </head>

    


    <body>
      <div class ="left">
          <nav>
              <a href="#" onclick="addAdminVisible()">Add Admin</a>
              <a href="#" onclick="coachApproval()">Pending Approval's</a>
              <a href="#" onclick="showCoaches()">Manage Coaches</a>
              <a href="#" onclick="showStudents()">Manage Students</a>
              <a href="#" onclick="showAdmins()">Manage Admins</a>
              <a href="../sessionCookieCheck/logout.php">Logout</a> 
              <a href="#" onclick="redirectToTndex()">Back</a>
              <script>function redirectToTndex(){window.location.href = "indexUser.php"}</script>
          </nav>
      </div>

      <h1>Welcome <?= $_SESSION["username"]; ?></h1>
      <!-- add Admin -->

      <div class="right" id="right">
          <table class="addAdminForm" style="visibility: hidden" id="addAdminForm">
            <tr>

              <td>Username :</td>
              <td><input type="text" id="username"></td>
            </tr><br><br>
            <tr>
              <td>Name :</td>
              <td><input type="text" id="name"></td>
            </tr><br><br>
            <tr>
              <td>Email :</td>
              <td><input type="email" id="email" onkeyup="emailCheck()"></td>
            </tr><br><br>
            <tr>
              <td>Password :</td> 
              <td> <input type="password" id="password" onkeyup="passwordCheck()"></td>
            </tr><br><br>
            <tr>
              <td>Confirm Password :</td>
              <td> <input type="password" id="confirmPassword" onkeyup="password2Check()"></td>
            </tr><br><br>
            <tr>
              <td>security Question:</td>
              <td> <input type="text" id="question"></td>
            </tr>
            <tr>
              <td>Answer:</td>
              <td> <input type="text" id="answer"></td>
            </tr>
            <tr><td><input type="button" value="Submit" onclick="addAdmin()"></td></tr><br><br><br><br><br><br>
            <div id = "error" style="visibility: hidden"> </div>
            <small></small>
          </table>

          <!-- manage coaches Table-->

          <table border="1" class="showCoaches" style="visibility: hidden" id="showCoaches"></table>
          <table border="1" class="showStudents" style="visibility: hidden" id="showStudents"></table>
          <table border="1" class="showAdmins" style="visibility: hidden" id="showAdmins"></table>
          <table border="1" class="coachApproval" style="visibility: hidden" id="coachApproval"></table>
      </div>
    </body>
</html>
