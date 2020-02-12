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

     <div style=" background : white ;border-radius: 10px; overflow-wrap: break-word; position:center; padding:5%;">
  
	  <div id="experience-menu">
		  <button onclick="location.href='partieun.php'">Un oeuf mou ?!</button>
      <button onclick="location.href='partiedeux.php'">La condensation !</button>
      <button onclick="location.href='partietrois.php'">La pression de l'eau !</button>
          </div>
	   
	    <div id="experience-side">
                 <h1 style="color:#09a0b4;">Les Expériences !</h1>
                <br>
                
    <p>Salut! Ici tu peux découvrir de nouvelles expérience et en apprendre plus sur le monde qui t'entoure !</p>
    <br>
                </div>
      
      
    </div>
  

</body></html>
