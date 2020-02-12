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
      
    
    <div id="quiz" align=center></div>
    <script type="text/javascript" src="/Les-petits-profs-mineurs/js/QuizUnivers3.js"> </script>
    <script> window.onload = Suivant() </script>
    
    
    

<img src="cartemercator.png"></img>
<p> Tu as sans doute déjà passé de longue minutes sur Google Maps[inserer un lien] à regarder une carte du monde et à t'imaginer voyager à traver different pays. On appelle cette image un planisphere car ... Mais peut on représenter correctement la surface d'une sphere sur un carré ?
</p>
<video src="cartemercator.mp4"></video>

<!-- https://tomroelandts.com/articles/earth-moon-system-scale-model -->

    </div>
    
  </body>
</html>
