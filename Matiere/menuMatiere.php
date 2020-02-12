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
  
      <div id="matiere-menu">
           <button onclick="location.href='partieun.php'">Qu'est-ce que la matière ?</button>
          <button onclick="location.href='partiedeux.php'">Les états de la matière</button>

          
      </div>
     
      <div id="matiere-side">
        <h1 style="color:black; margin-block-start: 0px;"> Le monde de la matière </h1>

  <!--  va chercher et execute le fichier app.js -->
  <!-- <script type="text/javascript" src='js/app.js'> </script> -->
  <!-- à faire : récupérer le nom entré ci dessus pour le metre dans le paragraphe -->
  <p> Salut! Je suis Professeur Einstein et je viens t'expliquer <span class="bold">les miracles</span> s'oppérant dans le monde de la matière. Clique sur les boutons ci-dessous, ils te conduiront directement sur <span class="bold">les différentes planètes</span> de ce monde. </p>
  <br>
                    <div align="center"><img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>
      </div>
      <br>
	</div>
  </body>
</html>
