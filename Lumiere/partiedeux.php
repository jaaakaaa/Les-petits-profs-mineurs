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
      	
	 <h1 style="color:rgb(181, 175, 20);"> La composition des couleurs </h1>
	    
	    <div id="texte">
		<p>Voici la seconde étape de nos recherches !</p>
		<br>
	    </div>
	    
	    
	<h2 style="color:rgb(181, 175, 20);"> Les mélanges de couleur </h2>

	    <div id="texte">
		<p> Il existe beaucoup de couleurs différentes. Mais on peut toutes les récréer à partir de trois couleurs ! </p>
		
	    </div>
	    
	    
	<h2 style="color:rgb(181, 175, 20);">La synthèse additive</h2>
		
	    <div id="texte">
		<p>Il s'agit de la création de couleur avec de la lumière. A partir des 3 couleurs (qu'on appelle couleurs primaires) suivantes - le roueg, le vert et le bleu - il est possible de refaire toutes les couleurs ! </p>
		<p>Essaye et tu verras ! 😉</p>
		
	    </div>
	<div id="menu">	
		<ul>
			<button onclick="<li"><a href="http://profil-couleur.com/lc/006-synthese-additive/principe-synthese-additive.html">Animation</a> </button>
		</ul>
	</div>
		    
		<br>
	    <div id="texte">
		<p>Alors ? Intéressant ! </p>
		<p>Il existe cependant 3 couleurs secondaires : on les construit en mélangeant des quantités identiques de 2 couleurs primaires différentes :</p>
		<p>- Rouge + Vert = Jaune</p>
		<p>- Rouge + Bleu = Magenta</p>
		<p>- Vert + Bleu = Cyan</p>
		
		<p> Bon cette méthode ne fonctionne que avec la lumière. Maintenant, on va regarder comment font les peintres !</p>
		
	    </div>
	    
	<h2 style="color:rgb(181, 175, 20);">La synthèse soustractive</h2>
		
	    <div id="texte">
		<p>Bon cette fois, on travaille avec des couleurs sur une feuille ou sur une peinture. </p>
		<p>Les couleurs primaires sont cette fois : Cyan, Magenta et Jaune</p>
		<p>Les couleurs secondaires quant à elles deviennent : Rouge, Vert et Bleu</p>
		
	    </div>
	    
	<div id="menu">	
		<ul>
			<button onclick="<li"><a href="http://profil-couleur.com/lc/006b-synthese-soustractive/synthese-soustractive.html">Animation</a> </button>
		</ul>
	</div>
		<br>
	    <div id="texte">
		<p>Est-ce que tu avais remarqué que toutes les couleurs sont iversées entre les 2 cas ?</p>
		<br>
	    </div>
	    
	<div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/QuizLumiere2.js"></script>
        <script> window.onload = Suivant() </script>
        
    </div>
  </body>
</html>
