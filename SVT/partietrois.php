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
    
    <div id="corpus">
		<h1 style="color:rgb(5, 163, 35);"> A la découverte des roches </h1>

		<div id="intro">
			<p> Te voilà sur une planète tout à fait à part! Regarde ci-dessous pour découvrir différentes roches qui composent notre Terre. </p>
			<p> Les photographies de roches que tu vas voir proviennent de la collection des Mines de Nancy. </p>
			<p> Le stylo est là pour te montrer la grandeur des roches. </p>
		</div>

		<!-- en argument, autoplay permet de lancer automatiquement le son en ouverture de page 
		<h2> Musique </h2>	
		<audio controls>
			<source src="audios/pipeband.mp3"></source>
			<source src="audios/pipeband.ogg"></source>
			Mettre à jour votre navigateur
			
		</audio>   -->

		<h2 style="color:rgb(5, 163, 35);"> Le quartz </h2>

		<div align="center"> 	
			<img src="Pictures/Quartz.jpg" alt="Quartz" width="300" height="200">
		</div>

		<div id="Quartz">

		  	<p> Le quartz provient de la lithosphère. La litosphère est la première couche terrestre. C'est la couche de terre sur laquelle tu marches. </p>
		  	<p>
		  	Il est très commun et tu peux en trouver dans beaucoup d'endroits </p>
		  	<p>
		  	Il est utilisé dans la fabriction d'objets de décoration dans des parcs par exemple. Il peut même servir dans des bijoux. </p>
	    </div>
	  	<br>

	  	<h2 style="color:rgb(5, 163, 35);"> La fluorine </h2>

	  	<div align="center"> 	
			<img src="Pictures/Fluorine.jpg" alt="Fluorine" width="200" height="300">
		</div>

		<div id="Quartz">

		  	<p> La fluorine se trouve en Afrique du Sud, au Mexique ou en Chine. </p>
		  	<p>
		  	Elle est utilisée pour sa beauté. Elle permet aussi de fabriquer de l'aluminium, matière qui compose les avions par exemple! </p>
	    </div>
	  	<br>

	  	<h2 style="color:rgb(5, 163, 35);"> La veine de minerais </h2>

	  	<div align="center"> 	
			<img src="Pictures/veine.jpg" alt="veine" width="200" height="300">
		</div>

		<div id="Quartz">

		  	<p> La veine de minerais est une longue ligne colorée qui est différente de la roche qui l'entoure. </p>
	    </div>
	    <br>

	    <h2 style="color:rgb(5, 163, 35);"> L'or des fous </h2>

	  	<div align="center"> 	
			<img src="Pictures/or_des_fous.jpg" alt="or" width="200" height="200">
		</div>

		<div id="Quartz">

		  	<p> L'or des fous, de son nom savant pyrite, peut se trouver dans certaines météorites. </p>
		  	<p> On peut faire du feu avec. Elle a aussi été utilisée pour des signaux radios pendant la Seconde Guerre Mondiale. </p>
	    </div>
	    <br>

	    <h2 style="color:rgb(5, 163, 35);"> La bombe volcanique </h2>

	  	<div align="center"> 	
			<img src="Pictures/bombe volcanique.jpg" alt="bombe" width="350" height="200">
		</div>

		<div id="Quartz">

		  	<p> La bombe volcanique était de la lave en fusion. Un morceau de lave a été projeté très fort et très haut dans le ciel pendant une éruption volcanique. </p>
		  	<p> Il était très chaud et s'est donc refroidi très vite. </p>
		  	<p> Celle ci est assez petite. Certaines bombes peuvent mesurer 6 mètres de diamètre. </p>
	    </div>
	    <br>

	    <h2 style="color:rgb(5, 163, 35);"> L'empreinte de fougère </h2>

	  	<div align="center"> 	
			<img src="Pictures/empreinte de fougère.jpg" alt="empreinte" width="600" height="400">
		</div>

		<div id="Quartz">

		  	<p> Certaines roches peuvent emprisonner des empreintes de fossiles pendant des milliers d'années. </p>
		  	<p>  Ici, des fougères ont laissé leur trace sur cette roche. </p>
		  	<p> Grâce à de telles empreintes, on peut étudier des vestiges du passé. </p>
	    </div>

		<!-- saute des lignes -->
	  	<br>

		<!-- insérer une vidéo
		<video src="audios/lorient.mp4" controls> Mettre à jour votre navigateur </video> -->
		
	</div>  
      
    </div>
  </body>
</html>
