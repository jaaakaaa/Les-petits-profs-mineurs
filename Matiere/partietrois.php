<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/Les-petits-profs-mineurs/style.css">
    <script type="application/javascript" src="/Les-petits-profs-mineurs/main.js"></script>
    <meta charset="utf-8">
  </head>
  
  <body style="background: grey;">
    
  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?> 
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
  
  <h2 style="color:#b46b2d" > Les mélanges de liquides </h1>

  <div id="texte">
  <p> Te voilà sur la troisème planète! Clique sur le bouton play pour lancer la vidéo et voir l'intéraction entre différents liquides.</p>
    <br></div>
  
    <!-- insérer une image -->
    <div>   <img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>

  <!-- insérer une vidéo -->
  <video src="audios/lorient.mp4" controls=""> Mettre à jour votre navigateur </video>

      
    </div>
  </body>
</html>
