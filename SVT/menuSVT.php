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
  
      <div id="svt-menu">
    <button onclick="location.href='partieun.php'">La biodiversité</button>
    <button onclick="location.href='partiedeux.php'">Le fonctionnement du vivant : Les animaux</button>
    <button onclick="location.href='partietrois.php'">Les roches</button>
      </div>
     
  
            <div id="svt-side">
                <h1  style="color:rgb(5, 163, 35);"> Les sciences de la vie et la terre </h1>
                <div align="center">
                    <img src="Pictures/professorowl.png" width="200" height="200">
                </div>
                <span>
                    <p style="color:black" size="+4" align="center">
                        <strong>Salut! Je suis professeur Hibou. Je vais t'accompagner dans ce voyage vers les merveilles de la nature</strong>
                    </p>
                </span>
            </div>
            
            
            </div>
      <br>
	  </div>
  </body>
</html>
