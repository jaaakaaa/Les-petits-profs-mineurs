<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="/Les-petits-profs-mineurs/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700,900" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="application/javascript" src="/Les-petits-profs-mineurs/main2.js"></script>
        <title>Les Prof Mineurs</title>
        <link rel="icon" href="/Les-petits-profs-mineurs/Images/mines_logo.ico">
        <meta charset="utf-8">
    </head>
        
        
        
    <body>
        
          <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>

    <?php require_once 'indexsub_header.php'; ?>

    <div id="content" style="top: auto ; background: white;">
      <a class="categorybox" href="Matiere/menuMatiere.php">
        <img width="250" height="200" src="Images\einstein.jpg">
        <span class="weirdtitle" style="font-size:20px;">Le monde de la matière</span>
      </a>
      <a class="categorybox" href="Lumiere/menuLumiere.php">
        <img width="250" height="200" src="Images\optique.jpg">
        <span class="weirdtitle" style="font-size:20px;">L'optique</span>
      </a>
      <a class="categorybox" href="Energie/menuEnergie.php">
        <img width="250" height="200" src="Images\Energy-27.jpg">
        <span class="weirdtitle" style="font-size:20px;">L'énergie</span>
      </a>
      <a class="categorybox" href="SVT/menuSVT.php">
        <img width="250" height="200" src="Images\svt.jpg">
        <span class="weirdtitle" style="font-size:20px;">SVT</span>
      </a>
      <a class="categorybox" href="Univers/menuUnivers.php">
        <img width="250" height="200" src="Images\astronomie.jpg">
        <span class="weirdtitle" style="font-size:20px;">Vers l'infini et au delà</span>
      </a>
      <a class="categorybox" href="Experience/menuExperience.php">
        <img width="250" height="200" src="Images\experience.jpg">
        <span class="weirdtitle" style="font-size:20px;">/!\ Expérience /!\</span>
      </a>


    </div>
  </body>
</html>
