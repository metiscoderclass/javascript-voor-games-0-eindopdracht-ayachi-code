<?php

$naam = $_POST["username"];
$wachtwoord = $_POST["password"];
$confirm_wachtwoord = $_POST['confirm-password'];
$button = $_POST["register-submit"];


$host = "localhost";
$user = "ayachi2003";
$pass = "";
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);

$sql = "INSERT INTO users(username,password) VALUES('$naam','$wachtwoord')";

if (isset($_POST["register-submit"])) {
  if ($wachtwoord != $confirm_wachtwoord) {
      echo "<script>alert('fout Wachtwoord of gebruikersnaam')</script>";
  }
  elseif ($wachtwoord == "" or $naam == "") {
    echo "<script>alert('vul je gegevens')</script>";
  }
   else {
    mysqli_query($connection,$sql);
  }

}







mysqli_close($connection);




?>



<!DOCTYPE html>

<html>
  
  <head>
    
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css" />
    <script type="text/javascript" src="index.js"></script>
  
  
  
  
  </head>
  
  
  
  <body>
    
    <div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="regContainer" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="server.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <label for="username">naam</label>
                    <input type="text" name="naam" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <label for="password">wachtwoord</label>
                    <input type="password" name="wachtwoord" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <label for="username">naam</label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="naam" value="">
                  </div>
                  <div class="form-group">
                    <label for="password">wachtwoord</label>
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="wachtwoord">
                  </div>
                  <div class="form-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm wachtwoord">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    
    
  </body>
  
  
  
  
</html>


