<?php
  require_once("../services/coachServices.php");
  // print_r($_FILES);
  // echo "<br>";
  // echo substr($_FILES['profilePicture']['type'],6);
  $userId = $_POST['userId'];

  $filedir = '../res/'.$userId.'.'.substr($_FILES['profilePicture']['type'],6);


  if(empty($_FILES['profilePicture']['name'])) {
    echo $userId;
  }
  else if(move_uploaded_file($_FILES['profilePicture']['tmp_name'], $filedir)){
    if (uploadImage($filedir,$userId)) {
      // echo "Image Uploaded Successfully";
      header('Location: ../views/coachProfileMain.php');
    }  
    else {
      echo "Image upload failed but saved";
    }
  }else{
      echo "error";
  }






  // if (isset($_POST['submitButton'])) {

  //   if(empty($_FILES['profilePicture']['name'])) {
  //     echo "<script>alert();</script>";
  //   }
  // //   if (isset($_POST["submitButton"])) {
  // //     $email = $_SESSION["email"];

  // //     //[type] => image/jpeg
  // //     else if($_FILES['myfile']['type']!="image/jpeg") {
  // //         echo "Only jpeg's are allowed";
  // //     }
  // //     else {
  // //         // print_r($_FILES);
  // //         // echo "<br>";
  // //         // echo $_FILES['myfile']['name'];
  // //         $filedir = 'profilepictures/'.$email.'.jpg';

  // //         if(move_uploaded_file($_FILES['myfile']['tmp_name'], $filedir)){
  // //             echo "Image Uploaded Successfully";
  // //         }else{
  // //             echo "error";
  // //         }

  // //     }

  // // }  
  // }

  

?>