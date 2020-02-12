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
      <h1 style="color:#09a0b4;">La condensation</h1>
	
  <div id="texte">
      		<p> <center> <b> Attention ! Cette expérience doit être accompagné d’un adulte ! </b> </center> </b> <br>
	      </div>
  
	   <h2 style="color:#09a0b4;"> Pour réaliser cette expérience, il te faut : </h2>
	      <div id="texte">
      		<p>Des glaçons</p>
            	<p>Un verre transparent rempli à moitié d’eau bouillante.</p>
            	<p>Une assiette </p> <br>
            <center> <b> Ça va être fun ! Que l’expérience commence ! </b> <br> </center>
	      </div>
      
      <h2 style="color:#09a0b4;"> Démarche à suivre : </h2>
	      <div id="texte">
      		<p>1) Chauffer l’eau et remplir à moitié le verre transparent. [Attention à ne pas te brûler ! ]</p>
             	<p>2) Mettre directement l’assiette au dessus du verre.</p>
              	<p>3) Mettre les glaçons au dessus de l’assiette.</p>
              	<p>4) Attendre quelques petites secondes.</p> <br>
            <center> <b> QUE LA MAGIE DE LA SCIENCE COMMENCE ! </b> </center>
	      </div>
      
      <div align="center"> <img src="Experience/Experience_condensation.JPG" alt='Des goutelettes s'accumulent sur les bords !'> </div>
      
      <h2 style="color:#09a0b4;"> Nos observation </h2>
	      <div id="texte">
      		<p>On s’aperçoit sur la vitre du verre la formation de petites gouttelettes d’eau.</p> <br>
            <center> <b> Magnifique ! </b> </center>
	      </div>
 
      <h2 style="color:#09a0b4;"> Comment ça marche ? </h2>
	      <div id="texte">
      		<p>La partie non occupée par l’eau bouillante dans le verre est plutôt occupé par la vapeur d’eau (il s’agit d’air chaud et humide). 
            À cause des glaçons posés au dessus de l’assiette la vapeur refroidit.
            Elle passe à l’état liquide et il y a donc formation des gouttelettes d’eau. C’est la <b>CONDENSATION</b>.</p> <br>
            <center> <b> Vive les sciences ! </b> </center> <br>
            <div align="right"> <i> BONUS parce que tu as réussi ton expérience:<br>
            C’est le secret derrière la formation de la pluie. La prochaine fois on parlera du cycle de l’eau. </i> </div>
      </div>
 
 </div>
</body></html>
