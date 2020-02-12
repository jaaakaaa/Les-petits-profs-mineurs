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
        <h1  style="color:#b46b2d" > Les états de la matière </h1>
        <div id="texte">
          <p> Te voilà sur ta toute première planète! Regarde ci-dessous pour apprendre quels sont les différents états de la matière. </p>
        </div>

        <!-- insérer une image -->
        <div> <img src="/Les-petits-profs-mineurs/Images/einstein.jpg" alt='Professeur einstein' width=200 heigth=200>  </div>

        <!-- en argument, autoplay permet de lancer automatiquement le son en ouverture de page 
<h2> Musique </h2>  
<audio controls>
<source src="audios/pipeband.mp3"></source>
<source src="audios/pipeband.ogg"></source>
Mettre à jour votre navigateur
</audio>   -->

        <h2 style="color:#b46b2d" > 3 états </h2>

        <div id="texte">

          <p> Il existe trois états de la matière: solide, liquide et gazeux. </p>
          <p>
            L'état solide possède sa propre forme que l'on ne peut pas changer. Cela peut être un cailloux, ton nez ou encore ta trousse. </p>
          <p>
            L'état liquide prend la forme que tu lui donne. C'est l'eau que tu bois, la pluie ou le sang qui coule dans tes veines. </p>
          <p>
            L'état gazeaux est souvent invisible et s'adapte aussi aux formes. C'est l'air qui t'entoure et que tu respires ou encore l'helium contenu dans des ballons de bauderuche.</p>
        </div>

        <div align="center">  <img width=100% src="/Les-petits-profs-mineurs/Images/Etatsex.PNG" alt='états'>   </div>

        <h2 style="color:#b46b2d" > Au niveau moléculaire </h2>

        <div id="texte"> 
          <p> L'objet de chaque état est un ensemble de petites boules appelées molécules. Dans l'état gazeux, elles sont très éloignées les unes des autres et bougent rapidement. </p>
          <p> Dans l'état liquide, elles sont plus rapprochées et bougent moins vite. </p>
          <p> Dans l'état solide, elles sont toutes rapprochées, bien rangées et sont immobiles. </p>

        </div>

        <h2 style="color:#b46b2d" > Quizz </h2>

        <div id="quizz">
          <p> Sauras-tu reconnaitre l'image qui correspond à chaque état? A toi de jouer!</p>
        </div>

        <div align="center">  
          <img src="/Les-petits-profs-mineurs/Images/molécule1.png" alt='molécule1'>
          <img src="/Les-petits-profs-mineurs/Images/molécule2.png" alt='molécule2'> 
          <img src="/Les-petits-profs-mineurs/Images/molécule3.png" alt='molécule3'>
        </div>

    
<div id="quiz" align=center></div>
  <script type="text/javascript" src="/Les-petits-profs-mineurs/js/QuizMatiere2.js"> </script>
    <script> window.onload = Suivant() </script>
    
  </body>
</html>
