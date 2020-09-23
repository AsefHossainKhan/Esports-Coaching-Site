<?php

require_once("../db/db.php");
require_once '../sessionCookieCheck/sessionCookie.php';



function showCoachApproveStatus(){
  $connection = dbConnection();

  $approveStatus = "false";
  $sql = "SELECT * FROM coaches WHERE approveStatus='".$approveStatus."'";
  $result= mysqli_query($connection, $sql);
  
  echo "<tr>
  <td>User Name</td>
  <td>Name</td>
  <td>Email</td>
  <td>UserType</td>
  <td>Phone</td>
  <td>Instagram</td>
  <td>Discord</td>
  <td>Steam</td>
  <td>MMR</td>
  <td>Primary Role</td>
  <td>Wallet</td>
  <td>Achievements</td>
  <td>TimeTable</td>
  <td>About Me</td>
  <td>Setup Status</td>
  <td>Action</td>
  
</td>";
  
  while($fetch = mysqli_fetch_assoc($result)){  

          $sql1 = "SELECT * FROM users WHERE userId= '".$fetch["userId"]."'" ;
          $result1= mysqli_query($connection, $sql1);

          
          while($fetch1 = mysqli_fetch_assoc($result1)){
              echo "<tr>
                        <td>".$fetch1["userName"]."</td>
                        <td>".$fetch1["name"]."</td>
                        <td>".$fetch1["email"]."</td>
                        <td>".$fetch1["userType"]."</td>
                    </td>";
          }
                echo "
                <td>".$fetch["phone"]."</td>
                <td>".$fetch["IGN"]."</td>
                <td>".$fetch["discord"]."</td>
                <td>".$fetch["steam"]."</td>
                <td>".$fetch["mmr"]."</td>
                <td>".$fetch["primaryRole"]."</td>
                <td>".$fetch["wallet"]."</td>
                <td>".$fetch["achievements"]."</td>
                <td>".$fetch["timetable"]."</td>
                <td>".$fetch["aboutMe"]."</td>
                <td>".$fetch["setupStatus"]."</td>
                <td><input type='button' value='Aprove' onclick='changeCoachStatus(".$fetch["userId"].")'></input></td>
            </td></tr>";

        }

}


  

  function createAdmin($username, $name, $email, $password, $userType, $question, $answer){
    $connection = dbConnection(); 

    $root = "Admin";

    $sql = "INSERT INTO users(userName,name,email,userType) VALUES('".$username."','".$name."','".$email."','".$userType."')";
    $result = mysqli_query($connection, $sql);

    $sql2 = "SELECT UserId FROM users WHERE userName='".$username."' and name='".$name."' and email='".$email."' LIMIT 1"; 
    $result2 = mysqli_query($connection, $sql2);
    $fetch = mysqli_fetch_assoc($result2);

    $sql3 = "INSERT INTO login(userId,password,question,answer) VALUES('".$fetch["UserId"]."','".$password."','".$question."','".$answer."')";
    mysqli_query($connection, $sql3);

    $sql4 = "INSERT INTO admins(userId,adminName,root) VALUES('".$fetch["UserId"]."','".$username."','".$root."')";
    mysqli_query($connection, $sql4);
  }

  function showCoachList(){
    $connection = dbConnection(); 
    $userType = "Coach";
    $sql = "SELECT UserId,username,name,email,userType FROM users WHERE userType='".$userType."'";
    $result= mysqli_query($connection, $sql);
      // $fetch = mysqli_fetch_assoc($result);
      // print "<table border=2>";
      echo "<tr><td>Username</td><td>Name</td><td>Email</td><td>Role</td><td>Action</td></tr>";

      while($fetch = mysqli_fetch_assoc($result)){  
         //$fetch["userId"];
         //sql1 ="UPDATE coaches SET approveStatus='Doe' WHERE id=2"
        // $sql1 = "SELECT * FROM coaches WHERE approve = '".$fetch['userId']."'";
        // $result1= mysqli_query($connection, $sql1);
        // $data= mysqli_fetch_assoc($result1);

        echo "<tr>
          <td>".$fetch["username"]."</td>
              <td>".$fetch["name"]."</td>
              <td>".$fetch["email"]."</td>
              <td>".$fetch["userType"]."</td>
              <td><input type='button' value='Remove' id=".$fetch["UserId"]." onclick='deleteCoaches(".$fetch["UserId"].")'></input></td>
          </td></tr>";
        
      }
// function deleteAdmin($fetch){
//       echo "laaaaaaaaaaaaaaaaaaaaaaaa";
// }

}

function showStudentList(){
  $connection = dbConnection(); 
  $userType = "Student";
  $sql = "SELECT UserId,username,name,email,userType FROM users WHERE userType='".$userType."'";
  $result= mysqli_query($connection, $sql);
    echo "<tr><td>Username</td><td>Name</td><td>Email</td><td>Role</td><td>Action</td></tr>";
    while($fetch = mysqli_fetch_assoc($result)){  

      echo "<tr>
        <td>".$fetch["username"]."</td>
            <td>".$fetch["name"]."</td>
            <td>".$fetch["email"]."</td>
            <td>".$fetch["userType"]."</td>
            <td><input type='button' value='Remove' id=".$fetch["UserId"]." onclick='deleteStudents(".$fetch["UserId"].")'></input></td>
        </td></tr>";
      
    }


}


function showAdminList(){
  $connection = dbConnection(); 
  $userId = $_SESSION["userId"];
  $sql1 =  "SELECT root FROM admins WHERE userId='".$userId."'";
  $result1= mysqli_query($connection, $sql1);
  $data = mysqli_fetch_assoc($result1);

  if($data["root"]=="masterAdmin"){
  

  $userType = "Admin";
  $sql = "SELECT UserId,username,name,email,userType FROM users WHERE userType='".$userType."'";
  $result= mysqli_query($connection, $sql);
  echo "<tr><td>Username</td><td>Name</td><td>Email</td><td>Role</td><td>Action</td></tr>";

    while($fetch = mysqli_fetch_assoc($result)){  

      echo "<tr>
        <td>".$fetch["username"]."</td>
            <td>".$fetch["name"]."</td>
            <td>".$fetch["email"]."</td>
            <td>".$fetch["userType"]."</td>
            <td><input type='button' value='Remove' id=".$fetch["UserId"]." onclick='deleteAdmins(".$fetch["UserId"].")'></input></td>
        </td></tr>";
      
    }
  }else{
    echo "Not Allowed.";
  }


}


function deleteCoach($id){
  $connection = dbConnection(); 
  $sql1 = "DELETE FROM login WHERE userId='".$id."'";
  mysqli_query($connection, $sql1);
  $sql2 = "DELETE FROM coaches WHERE userId='".$id."'";
  mysqli_query($connection, $sql2);
  $sql = "DELETE FROM users WHERE userId='".$id."'";
  mysqli_query($connection, $sql);
  // if($result){
  //   echo "ok";
  // }

  // if(isset($result3)){
  //   echo "ok";
  // }else{
  //   echo "prob";
  // }
}

function deleteStudent($id){
  $connection = dbConnection(); 
  $sql1 = "DELETE FROM login WHERE userId='".$id."'";
  mysqli_query($connection, $sql1);
  $sql2 = "DELETE FROM students WHERE userId='".$id."'";
  mysqli_query($connection, $sql2);
  $sql = "DELETE FROM users WHERE userId='".$id."'";
  mysqli_query($connection, $sql);
}

function deleteAdmin($id){
  $connection = dbConnection(); 
  $sql1 = "DELETE FROM admins WHERE userId='".$id."'";
  mysqli_query($connection, $sql1);
  $sql2 = "DELETE FROM login WHERE userId='".$id."'";
  mysqli_query($connection, $sql2);
  $sql = "DELETE FROM users WHERE userId='".$id."'";
  mysqli_query($connection, $sql);
}

function changeCoachStatus($id){
  $connection = dbConnection(); 
  $sql1 = "UPDATE coaches SET approveStatus='true' WHERE userId='".$id."'";
  mysqli_query($connection, $sql1);
}






?>