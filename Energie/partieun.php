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
      

		<h1 style="color:rgb(185,5,5);"> Les différentes sources d'énergie </h1>

		<div id="texte" align="center"><p> Nous allons découvrir ensemble les différentes sources d'énergie ! </p></div>

	  	<!-- insérer une image -->
	  	<div align="center"> <img src="Images/tesla_hello.gif" alt="Professeur tesla" width="100" heigth="100"> </div>

	    <h2 style="color:rgb(185,5,5);"> Où trouve-t-on de l'énergie ? </h2>

		<div id="texte">

		  	<p> Partout ! On peut trouver de l'énergie dans beaucoup beaucoup de milieux </p>
		  	<p> Le vent peut être puissant et produire de l'énergie, le soleil chauffe et produit aussi de l'énergie, l'eau qui coule dans les rivières et même ton corps produit de l'énergie pour que tu puisses marcher, parler ou encore jouer ! </p>
		  	<p> Nous allons donc découvrir ensemble plein de choses sur l'énergie ! As-tu déjà entendu l'expression <b><i> énergie renouvelables </b></i> ? Non ? Alors il est temps de le découvrir !</p>
	    	</div>
	  	
	  <div align="center"> <img src="Images\enfant_course.jpg" alt="états"> </div>

	  	<h2 style="color:rgb(185,5,5);"> Energie renouvelable </h2>

	  	<div id="moleculaire"> 
		  	<p> Tu as probablement beaucoup entendu parler de ce <i> blabla renouv... quoi ?  </i>  Mais pas de panique ! Ceci est une expression bien compliquée juste pour parler des moyens de produire de l'énergie sans prendre à la terre quelque chose qu'elle ne peut pas récupérer. </p>
		  	<p> Par exemple, quand je fais tourner mon moulin avec du vent, je ne vole pas le vent il passe quoiqu'il arrive, donc j'utilise une énergie renouvelable. </p>
		  	<p> Par contre, quand je mets de l'essence dans ma voiture, elle part dans la fumée du pot d'échappement, et je la perds à tout jamais : l'essence n'est pas une énergie renouvelable.  </p>
		</div>
	  	
	  	<br>
	  	
	  	<h2 style="color:rgb(185,5,5);"> Il est maintenant temps de jouer !	</h2>
	  	 <div id="quiz" align=center></div>
  <script type="text/javascript" src="/Les-petits-profs-mineurs/js/QuizEnergie1.js"> </script>
    <script> window.onload = Suivant() </script>

      
    </div>
  </body>
</html>
