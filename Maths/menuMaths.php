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
  
      <div id="maths-menu">
          <button onclick="location.href='partieun.php'">Les ensembles</button>
          <button onclick="location.href='partiedeux.php'">Les fonctions</button>
          <button onclick="location.href='partietrois.php'">La représentation des fonctions</button>
          <button onclick="location.href='partiequatre.php'">L'infini</button>
          <button onclick="location.href='partiecinq.php'">L'ensemble Z</button>
          <button onclick="location.href='partiesix.php'">L'ensemble Q</button>
          <button onclick="location.href='partiesept.php'">La trompette de Gabriel</button>
          
      </div>
     
      <div id="maths-side">
        <h1 style="color:black; margin-block-start: 0px;"> Les mathématiques </h1>

  <!--  va chercher et execute le fichier app.js -->
  <!-- <script type="text/javascript" src='js/app.js'> </script> -->
  <!-- à faire : récupérer le nom entré ci dessus pour le metre dans le paragraphe -->
  <p> blablabla </p>
  <br>
                    <div align="center"><img src="" width="200" height="200">  </div>
      </div>
      <br>
	</div>
  </body>
</html>