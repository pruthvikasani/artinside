<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Welcome to Art Inside</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <br>
    <h3>Artist Login</h3>
  </div>
  <div class="imgcontainer">
    <img src="user.png" alt="Avatar" class="avatar" style="height: 100px; width: 100px;">
  </div>
<form method="post" action="login.php">
  <div class="login-form">
   <?php include("errors.php"); ?>
    <input type="text" name="username" placeholder="Username"/><br>

    <input type="password" name="password" placeholder="Password"/>
    <br>
    <input type="submit" value="Login" name="login" class="login-button"/>
<!--    <a href="register.php"><input type="submit" value="Sign up!" class="login-button"/></a>-->
    <br>
    
    <br>
    <a href="register.php"><h6 class="no-access">New user? Sign up here!</h6></a>
  </div>
    </form>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
