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
  <!Choisir la couleur des titres selon le chapitre concerné !!>
<!-- Matière : #b46b2d -->
<!-- Lumière : rgb(181, 175, 20) -->
<!-- Energie : rgb(185, 5, 5) -->
<!-- SVT : rgb(5, 163, 35) -->
<!-- Univers : rgb(95, 120, 170) -->
<!-- Expérience : #09a0b4-->
<!-- Maths #050980 -->

    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
      
          <h1 style="color:[REMPLACER PAR UNE COULEUR];"> Titre principal </h1>

		      <h2 style="color:[REMPLACER PAR UNE COULEUR];"> Titres secondaires </h2>

		      <div id="texte"> <!-- Zone de texte -->
		  	    <p> Paragraphe </p>
		  	    <p> Paragraphe </p>
		  	    <br> <!-- Saut de ligne -->
		  	    <p> Paragraphe </p>
		  	    <p> Paragraphe </p>
	        </div>

	    <!-- Insérer une image -->
	    <div align="center"> <img src="Images/Etatsex.PNG" alt='Texte alternatif à afficher si ça ne charge pas'> </div>

	    <!-- Insérer une vidéo -->
	    <div align="center"><video src="crayon_verre.mp4" controls>  </video> </div> <!-- le tag "controls" précise que les contrôles de la vidéo (play, pause, etc) doivent s'afficher -->
      
      <a onclick="spoiler('spoiler1')" style="border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;width: 100%;" href="#rien"><pr> En savoir plus </pr></a>
<div id="spoiler1" style="border-radius:5px;border: 2px solid gray; display: none; padding: 15px;margin:0px;">
    <!-- text ici -->
</div>
      
      
        <div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
      
    </div>
  </body>
</html>
