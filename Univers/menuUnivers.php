<!DOCTYPE html>
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

    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; position:center; padding:5%; margin-top:10px;">
  
      <div id="astronomie-menu">
          <button onclick="location.href='partieun.html'">Voyager dans l'Univers</button>
    <button onclick="location.href='partiedeux.html'">Le Système Solaire</button>
          <button onclick="location.href='partietrois.html'">La vitesse de la lumière</button>
          <button onclick="location.href='partiequatre.html'">Questions pour un astronaute</button>
      </div>
     
      <div id="astronomie-side">
        <h1 style="color:black; margin-block-start: 0px;"> À la Découverte de l'Univers  </h1>

  <!--  va chercher et execute le fichier app.js -->
  <!-- <script type="text/javascript" src='js/app.js'> </script> -->
  <!-- à faire : récupérer le nom entré ci dessus pour le metre dans le paragraphe -->
        <p> Salut ! Je suis le Professeur Kepler et je viens t'expliquer les miracles de notre univers ! Si tu as envie de découvrir de nouveaux mondes et d’explorer notre système solaire, cliques sur ces boutons ! </p>
        <br>
        <div align="center"><img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>
      </div>
      <br>
	  </div>
  </body>
</html>
