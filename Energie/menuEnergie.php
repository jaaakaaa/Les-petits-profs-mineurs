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
  
    <div id="energie-menu">
    <button onclick="location.href='partieun.php'">Sources d'énergie !</button>
          </div>
     
      <div id="energie-side">
                 <h1 style="color:rgb(185, 5, 5);">Energie</h1>
                <br>
                
    <p>Salut! Je suis Professeur Joule et je viens t'expliquer les merveilles du monde de l'énergie. Clique sur les boutons ci-contre, ils te conduiront directement sur <span class="bold">les différentes planètes</span> de ce monde.</p>
    <br>
                </div>
      
    </div>
  </body>
</html>
