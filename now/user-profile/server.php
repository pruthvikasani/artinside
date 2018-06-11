<?php

  session_start();
  $username = "";
  $email = "";
  $errors = array();

  $db = mysqli_connect('localhost','root','','registration');

  if (isset($_POST['signup']))
  {
     $name = mysqli_real_escape_string($db,$_POST['name']); 
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $username = mysqli_real_escape_string($db,$_POST['username']); 
     $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
      
      
     if(empty($name)){
         array_push($errors, "Name is required");
     }
     if(empty($email)){
         array_push($errors, "Email is required");
     }
     if(empty($username)){
         array_push($errors, "Username is required");
     }
     if(empty($password_1)){
         array_push($errors, "Password is required");
     }
      
     if($password_1 != $password_2){
         array_push($errprs, "Two passwords do not match");
     }
      
     if(count($errors) == 0){
         $password = md5($password_1);
         $sql = "INSERT INTO `users`(`name`, `email`, `username`, `password`) VALUES  ('$name','$email','$username','$password')";
         mysqli_query($db, $sql);
         $_SESSION['username'] = $username;
         $_SESSION['success'] = "You are now logged in";
         
         header('location: user-profile/index.php');
     }
  }

?>