<?php

$users = array("user" => "password");
$logged_user = $_POST["username"];


function welcomeMessage($logged_user) {
  if (!$logged_user) {
    return;
  } else {
    return $_POST["username"];
  }
}




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>


  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>

  <h1>Welcome to the login page!</h1>
  <h2>Hi, <?=welcomeMessage($logged_user)?>!</h2>



  <form method="post" action = "">
  Alright, if you've made an account, go ahead and login!
  <br><br>
  Username:
  <input type="text" name="username">
  <br><br>
  Password:
  <input type="text" name="password">
  <br><br>
  <input type="submit" name="submit">
  <br><br>
  If you haven't made an account and would like to, click here!
  <a href="createlogin.php">link text</a>


  </form>

  <br>

  <a href="login.php">Reset</a>

  <br><br>

  <?php


  if (!$logged_user) {
    return;
  } elseif (array_key_exists($logged_user, $users)) {
    echo "You are now logged in!";
  } else {
    echo "It appears your login info was incorrect. Please try again.";
  }

  ?>


	<script src="index.js"></script>
  </body>
</html>

