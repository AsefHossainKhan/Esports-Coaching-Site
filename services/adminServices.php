<?php

require_once("../db/db.php");

function isPasswordMached($password, $confirmPassword){
    if($password !== $confirmPassword){
      return false;
    }else{
      return true;
    }
}

  function createUser($username, $name, $email, $password, $userType){
    $connection = dbConnection(); 

    $sql = "INSERT INTO users(userName,name,email,userType) VALUES('".$username."','".$name."','".$email."','".$userType."')";
    $result = mysqli_query($connection, $sql);

    $sql2 = "SELECT UserId FROM users WHERE userName='".$username."' and name='".$name."' and email='".$email."' LIMIT 1"; 
    $result2 = mysqli_query($connection, $sql2);
    $fetch = mysqli_fetch_assoc($result2);

    $sql3 = "INSERT INTO login(userId,password) VALUES('".$fetch["UserId"]."','".$password."')";
    mysqli_query($connection, $sql3);
  }

  function showAdminList(){
    $connection = dbConnection(); 
    $userType = "Coach";
    $sql = "SELECT UserId,username,name,email,userType FROM users WHERE userType='".$userType."'";
    $result= mysqli_query($connection, $sql);
      // $fetch = mysqli_fetch_assoc($result);
      // print "<table border=2>";
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
              <td><input type='button' value='Remove' id=".$fetch["UserId"]." onclick='deleteAdmin(".$fetch["UserId"].")'></input></td>
          </td></tr>";
        
      }
// function deleteAdmin($fetch){
//       echo "laaaaaaaaaaaaaaaaaaaaaaaa";
// }

}


function deleteAdmin($id){
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

?>