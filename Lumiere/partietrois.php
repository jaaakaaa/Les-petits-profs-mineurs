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
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

  <h1 style="color:rgb(181, 175, 20);"> Les illusions d'optiques </h1>
  <br>
      
  <div id="texte">
    <p>Tu as surement déjà rencontrer des illusions d'optiques. Mais est-ce que tu sais pourquoi tu t'es fait avoir ?</p><br>
      </div>

        <div align="center">  <img src="illusion1.jpg" alt="Image">   </div><br>
  <div id="texte">    
    <p>Toi aussi tu vois l'image bouger pas vrai ? Pourtant c'est juste une image, elle est immobile.</p>
    <p>C'est seulement notre cerveau qui comprend mal l'image et la construction de l'image donne une fausse impression de mouvement.</p><br>
      </div>
      
  <div align="center">  <img style="width:100%" src="illusion3.jpg" alt="Image">  </div><br>
      
  <div id="texte">    
    <p>Celle-ci est jolie aussi ! L'image est trop détaillée pour que notre cerveau la comprenne. Si tu te concentres sur un cercle, il ne bouge pas, pas vrai ? Mais les autres tournent parce que tu ne te concentres pas dessus.</p><br>
      </div>
      
  <div align="center">  <img src="lignes parallèles.png" alt="Image">   </div><br>
      
  <div id="texte">
    <p>Est-ce que toi aussi tu penses que les lignes sont tordues ? C'est normal ! Prend ta règle pour vérifier mais les lignes sont droites ! </p>
    <p>Cette illusion donne de fausses lignes tordues à cause du décalage entre les carrées noirs et blancs.</p><br>
    <p>Encore un petit jeu sur les couleurs : </p><br>
      </div>

  <video src="rectangle.mp4" controls="">  </video><br>
      
  <div id="texte">    
    <p>Surpris ? Tu as vu que lorsqu'on retire la couleur autour du rectangle, il est de la même couleur partout ?</p><br>
    <p>En fait, notre cerveau tente de déchiffrer toute l'image donc il prend en compte le contour. Sauf que le contour a été choisi pour qu'on se trompe !</p><br>
    
    <p>Maintenant, on va voir la notion de perspective : notre cerveau aime bien les images en 3D et sur une vidéo, l'image est en 2D. </p>

  <video src="voiture.mp4" controls="">  </video><br>
  
  <div id="texte"> 
    <p>Est-ce que tu savais que la voiture allait traverser ?</p>
    <br>
    <p>Il ne faut pas être surpris, notre cerveau n'est pas parfait ! Il fait de son mieux pour analyser ce que l'oeil lui transmet, mais quand il a trop d'informations, il essaye de s'adapter et d'interprêter pour que ce que l'on voit reste "logique". Et c'est comme ça que l'on se retrouve avec des images qui bougent ou des formes déformées !</p>
  </div>
      
    </div>
  </body>
</html>
