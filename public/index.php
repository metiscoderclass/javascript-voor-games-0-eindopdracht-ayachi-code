<?php

session_start();


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>game</title>
    <script src="/lib/multi.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.js"></script>
    <link rel="stylesheet" href="index.css">


  </head>
  <body>





    <center>
  <h1><?php echo "Welkom ".$_SESSION["naam"];  ?> bij snake with bilal....</h1>

  <button class="mooi" onclick="play()">Play</button><br>

  <button class="score" onclick="score()" style="margin-top: 29px;">Show high score</button><br>

  <button class="score" onclick="report()" style="margin-top: 29px;">Report a bug</button><br>

  <button class="score" onclick="info()" style="margin-top: 29px;">Hoe speel je</button><br>
  
  <button class="score" onclick="profiel()" style="margin-top: 29px;">mijn profiel</button>
   
  

</center>



<script src="index.js"></script>
  </body>
</html>
