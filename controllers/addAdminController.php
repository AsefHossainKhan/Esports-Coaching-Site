<?php

    require_once("../services/adminServices.php");
    require_once("../services/userServices.php");

    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    $statusUserName = isUsernameUnique($username);
    $status = isEmailUnique($email);
    $statusPassword = isPasswordMached($password, $confirmPassword);

    if(empty($username) || empty($name) || empty($email) || empty($password) ||empty($confirmPassword)){
        echo "Empty Fields Found";
    }
    else if($statusUserName == false){
        echo "username not unique";
    }
    else if($status == false){
        echo "email not unique";
    }
    else if($statusPassword == false){
        echo "Password not mached";
    }
    else{
        $userType = "Admin";
        createAdmin($username,$name,$email,$password,$userType); 
    }


?>
