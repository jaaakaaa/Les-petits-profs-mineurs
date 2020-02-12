<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
  <head>
             <?php require_once $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/head.php"; ?>
    </head>
    
    <body>

  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
    
        <h2 style="color:#b46b2d" > Les changements d'état </h1>

        <div id="texte">
  <p> Te voilà sur la deuxième planète! Clique sur le bouton play pour apprendre comment fonctionnent les changements d'états de l'eau.</p>
      <br> </div>
  
    <!-- insérer une image -->
    <div>   <img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>

  <!-- insérer une vidéo -->
  <video src="audios/lorient.mp4" controls=""> Mettre à jour votre navigateur </video>
  cette video n'existe pas ...



  
      <br>    
    </div>
  </body>
</html>
