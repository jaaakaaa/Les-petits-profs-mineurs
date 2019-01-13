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
  
      <div id="optique-menu">
    <button onclick="location.href='partieun.html'">La propagration de la lumière</button>
    <button onclick="location.href='partiedeux.html'">La composition des couleurs</button>
          <button onclick="location.href='partietrois.html'">Illusions d'optiques</button>
          <button onclick="location.href='partiequatre.html'">la perception des images</button>
      </div>
     
      <div id="optique-side">
        <h1 style="color:black; margin-block-start: 0px;"> Le monde de la lumière </h1>

  <!--  va chercher et execute le fichier app.js -->
  <!-- <script type="text/javascript" src='js/app.js'> </script> -->
  <!-- à faire : récupérer le nom entré ci dessus pour le metre dans le paragraphe -->
        <p> Salut! Je suis Professeur Descartes et je viens t'expliquer les merveilles de l'optique. Clique sur les boutons ci-dessous, ils te conduiront directement sur <span class="bold">les différentes planètes</span> de ce monde. </p>
        <br>
        <div align="center"><img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt="Professeur einstein" width="200" height="200">  </div>
      </div>
      <br>
	  </div>
  </body>
</html>
