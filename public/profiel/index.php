<?php

session_start();


?>





<!DOCTYPE html>
<html>
<head>
  <title id="title">home</title>
  <link rel="shortcut icon" href="/benodigdheden/plaatjes">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="index.css">

  <!-- Libary p5.js -->
  <script src="bibliotheek/p5.js"></script>
  <script src="bibliotheek/p5dom.js"></script>

  <!-- Jquery libary -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



  <link rel="stylesheet" href="index.css">
</head>
<body style="background-color: rgb(118, 137, 169)">
  <nav class="navbar navbar-default" style="background-color: rgb(83, 241, 241)">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand"><?php echo " Welkom ".$_SESSION["naam"];  ?></a>
      </div>
      <ul class="nav navbar-nav" style="background-color: rgb(77, 101, 141);">
        <li class="active"><a href="/public/index.php">Home</a></li>
      </ul>
    </div>
  </nav>


    <center>
    <h3 id="hoogste_scoren">hoogste Scoren:</h3>
    </center>


    <table>
  <thead>
    <tr>
      <th>trofee naam</th>
      <th>trofee level</th>
      <th>trofee beschrijving</th>
    </tr>
    <tr>
      <td>Beginner</td>
      <td>Level 1</td>
      <td>Scoor tien punten</td>
    </tr>
      
  </thead>
  <tbody>
  
  </tbody>
</table>


  <script src="index.js"></script>
</body>
</html>