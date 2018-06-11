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
    <h3>Sign up here</h3>
  </div>
<form method="post" action="register.php">
  <div class="login-form">
<!--    <h3>Name:</h3>-->
        <?php include("errors.php"); ?>
    <input type="text" name="name" placeholder="Name"/><br>
<!--    <h3>Email:</h3>-->
    <input type="text" name="email" placeholder="Email"/><br>
<!--    <h3>Password:</h3>-->
    <input type="text" name="username" placeholder="Username"/><br>
    <input type="password" name="password_1" placeholder="Choose Password"/>
    <br>
<!--    <h3>Retype Password:</h3>-->
    <input type="password" name="password_2" placeholder="Confirm Password"/>
    <br>
    <input type="submit" value="Sign up" name="signup" class="login-button"/>
    <input type="submit" value="Login" name="login" class="login-button"/>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  </div>
</form>
  
</div>
<!--
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
