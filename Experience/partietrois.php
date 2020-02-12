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
      <h1 style="color:#09a0b4;">La pression de l'eau</h1>
	
 <h2 style="color:#09a0b4;"> Pour réaliser cette expérience, il te faut : </h2>
	      <div id="texte">
      		<p>Une bouteille en plastique vide</p>
            <p>Du ruban adhésif </p>
            <p>Une bassine</p>
            <p>De l’eau </p> <br>
            </div>
      
      <h2 style="color:#09a0b4;"> Démarche à suivre : </h2>
	      <div id="texte">
      		<p>1) Percer 3 petits trous sur toute la hauteur de la bouteille.</p>
              	<p>2) Boucher les trous avec le ruban adhésif. </p>
              	<p>3) Placer l’ensemble dans une bassine. </p>
             	<p>4) Verser de l’eau du robinet dans la bouteille. </p>
              	<p>5) Enlever la bande de ruban adhésif.</p> <br>
            </div>
      
      <h2 style="color:#09a0b4;"> Nos observation </h2>
	      <div id="texte">
      		<p>Plus le trou est bas, plus l’eau gicle fort !</p> <br>
	      </div>
 
      <h2 style="color:#09a0b4;"> Comment ça marche ? </h2>
	      <div id="texte">
      		<p>Le trou du bas à plus d’eau au-dessus de lui, contrairement au trou du haut ou la colonne d’eau est moins importante.
            Ainsi, le poids d’eau au-dessus du trou est beaucoup plus grand et pousse ainsi plus fort, permettant à l’eau de gicler plus loin : 
            c'est la <b>pression</b>, qui dépend de la hauteur de la colonne d’eau.</p> <br>
            <div align="right"> <i> BONUS parce que tu as réussi ton expérience:<br>
            C’est pour ça que si tu plonges à un ou deux mètres de profondeur, tu sens l'eau appuyer dans tes oreilles.</i> </div>
      </div>
 
 </div>
</body></html>
