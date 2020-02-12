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

    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; position:center; padding:5%; margin-top:10px;">
  
      <div id="optique-menu">
    <button onclick="location.href='partieun.php'">La propagration de la lumière</button>
    <button onclick="location.href='partiedeux.php'">La composition des couleurs</button>
          <button onclick="location.href='partietrois.php'">Illusions d'optiques</button>
      </div>
     
      <div id="optique-side">
        <h1 style="color:black; margin-block-start: 0px;"> Le monde de la lumière </h1>

  <!--  va chercher et execute le fichier app.js -->
  <!-- <script type="text/javascript" src='js/app.js'> </script> -->
  <!-- à faire : récupérer le nom entré ci dessus pour le mettre dans le paragraphe -->
        <p> Salut! Je suis Professeur Descartes et je viens t'expliquer les merveilles de l'optique. Clique sur les boutons ci-dessous, ils te conduiront directement sur <span class="bold">les différentes planètes</span> de ce monde. </p>
        <br>
        <div align="center"><img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>
      </div>
      <br>
	  </div>
  </body>
</html>
