<?php

    require_once("../services/adminServices.php");
    require_once("../services/userServices.php");

    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $question = $_POST["question"];
    $answer = $_POST["answer"];

    function isPasswordMached($password, $confirmPassword){
        if($password !== $confirmPassword){
          return false;
        }else{
          return true;
        }
    }

    function  isSecurityQuestionAnswerSet($question, $answer)
        {
            if(empty($question) || empty($answer)){
                return false;
            }else{
                return true;
            }
        }


    $statusUserName = isUsernameUnique($username);
    $status = isEmailUnique($email);
    $statusPassword = isPasswordMached($password, $confirmPassword);
    $statusQuestionAnswer = isSecurityQuestionAnswerSet($question, $answer);

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
    else if( $statusQuestionAnswer == false){
        echo "Please Enter security question and answer";
    }
    else{
        $userType = "Admin";
        createAdmin($username,$name,$email,$password,$userType,$question,$answer); 
    }


?>
