<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
             <?php require_once $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/head.php"; ?>
    </head>
    
    <body>

  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

  <h1 style="color:rgb(181, 175, 20);">  La propagation de la lumière </h1>

  <div id="texte">
    <p>  Démarrons notre observation 😃 ! </p><br>
  </div>
    
    <!-- insérer une vidéo -->
  <video src="crayon_verre.mp4" controls="">  </video>
    <br>
  
  <h2 style="color:rgb(181, 175, 20);"> La r�fraction </h2>
    <br>
    <div id="texte">
    <p> Etonnant pas vrai ? C'est même trop cool ! ;)  </p>
      <p> Ce phénomène s'appelle la réfraction ! Il se produit lorsque les rayons de lumière passe de l'air à l'eau, ou inversement : on dit que la lumière transite d'un milieu (l'air) à un autre (l'eau). </p>
      <p> Les rayons lumineux rencontrent la surface de l'eau et sont déviés. C'est pour cela qu'on trouve que le crayon est cassé ! </p>
      <p> Notre cerveau se trompe ! Il pense que les rayons lumineux vont tout droit sauf qu'ils ont été déviés. </p>
        <br>
  </div>
    
  <div align="center">  <img src="experience_refraction1.png" alt="Image">  </div>
        <br>
    
  <div id="texte">    
        <p> Notre cerveau pense que la pièce est en A' mais elle se trouve en A.</p>
        <br>
  </div>
  
    <h2 style="color:rgb(181, 175, 20);"> La dispersion de la lumière </h2>
        <br>
  <div id="texte"> 
      <p>La lumière blanche est composée de pleins de couleurs : les couleurs de l'arc-en-ciel ! </p>
      <p>Ce qui nous permet d'observer les couleurs toutes séparées les unes des autres c'est la dispersion !</p>
        <br>
  </div>
      
    <div align="center"> <img src="goutte réfraction arcenciel.png" alt="goutte"> </div>
      <br>
   
  <div id="texte"> 
      <p>Un arc-en-ciel se forme toujours lorsque la lumière passe à travers des gouttes d'eau.</p>
      <p>Tu peux voir un arc-en-ciel en tournant le dos au soleil lorsqu'il pleut !</p>
        <p> On peut aussi décomposer la lumière avec un prisme </p>
      <br>
  </div>
      
  <div id="menu"> 
    <ul>
      <button onclick="<li"><a href="http://www.profil-couleur.com/lc/003-couleur-newton/cercle-couleurs.html">Animation</a> </button>
    </ul>
  </div>
        <br>
  <div id="texte"> 
        <p>C'est joli non ?</p>
        <br>
  </div>
      
  <h2 style="color:rgb(181, 175, 20);"> L'absorption des couleurs </h2>
        <br>
  <div id="texte"> 
        <p>Les objets qui nous entourent ne brillent pas ! Ils ne font que renvoyer la lumière. Les objets capturent une partie de la lumière et renvoient le reste ! </p>
        <br>
  </div>
      
    <div align="center"> <img src="cercle chromatique.jpg" alt="cercle"> </div>
      <br>
  
  <div id="texte"> 
        <p>Lorsqu'un objet est orange c'est qu'il capture la couleur bleue. Pour un objet jaune, le violet est absorbé.</p>
  </div>
  
  <div id="quiz" align=center></div>
  <script type="text/javascript" src="../js/QuizLumiere1.js"> </script>
    <script> window.onload = Suivant() </script>
      
    </div>
  </body>
</html>
