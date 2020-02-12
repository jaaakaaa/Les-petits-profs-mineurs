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

  <h1 style="color:rgb(95, 120, 170);" >Voyager dans l'Univers</h1>

<br>
  <h2 style="color:rgb(95, 120, 170);" > L'Action-Réaction </h2>
<br>

  <p>  
La fusée, c’est le véhicule indispensable pour voyager dans l’espace ! Mais comment ça fonctionne ?  </p>
  
    <p>Le plus compliqué c’est le décollage ! Pour décoller une fusée on utilise un phénomène qui s'appelle « l’action-réaction ». </p>
    <p>C’est comme quand on gonfle un ballon et qu’on le lâche. Tu peux essayer !  </p>
    <p>Tu peux voir que le ballon se dégonfle en s'envolant. En fait l’air qui sort du ballon va dans un sens et en réaction, le ballon dans l’autre. C’est ça l’action-réaction. La fusée s’envole un peu de la même manière que le ballon.</p>
    <br>
    
    <h2 style="color:rgb(95, 120, 170);" > Mais c'est quoi qui pousse la fusée ? </h2>
    <p>Dans la fusée il y a un moteur à réaction. Dans ce moteur, il y a un combustible (de l'essence ou du gaz) qui brûle et qui génère beaucoup d'énergie. Cette énergie ne peut pas rester en place, donc elle sort par le seul endroit possible : le réacteur de la fusée !</p>
    <p>Et cette énergie qui sort à toute vitesse par le réacteur, c'est comme l'air qui sort à toute vitesse par le trou du ballon : ça pousse la fusée de plus en plus haut et de plus en plus vite jusqu’au moment où elle arrive dans l’espace.  </p>
    <p> C'est pour ça qu'une fusée est si grande ! Pratiquement toute la fusée sert à contenir le combustible qui brule. Il y a très peu d'espace pour les astronautes et leurs affaires !</p>
    <br>
    <p>D'ailleurs, les moteurs à réactions ne servent pas que pour les fusées ! Ils sont très répandus chez les avions et les bateaux.</p>
    <div align="center">  
    <img src="fusée_explication.png" alt="fusée_explication">
  </div>
  
  <a onclick="spoiler('spoiler1')" style="border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;width: 100%;" href="#rien"><pr> En savoir plus </pr></a>
<div id="spoiler1" style="border-radius:5px;border: 2px solid gray; display: none; padding: 15px;margin:0px;">
    <p style="margin-block-start: 0px;margin-block-end: 0px;"> L'action-réaction porte un autre nom chez les scientifiques : c'est la Troisième loi de Newton ! Newton, c'est le scientifique qui a découvert le principe de la gravité (l'homme qui s'est pris une pomme sur la tête ;) )</p>
    <p style="margin-block-start: 0px;margin-block-end: 0px;"> Ce que cette troisième loi dit vraiment, c'est que dès qu'un truc applique une "force" sur une chose, cette chose applique une "force équivalente" sur le truc. C'est un peu difficile à comprendre, mais c'est comme quand tu te cognes contre un mur : en te cognant, tu as appliqué (sans faire exprès), une force sur le mur. Et en retour, le mur a appliqué cette même force sur toi, c'est pour ça que tu as mal !</p>
    <p style="margin-block-start: 0px;margin-block-end: 0px;"> Dans le cas de l'air et du ballon, c'est car le ballon est élastique qu'il "force" l'air à sortir très vite, et comme il applique une force sur l'air qui est très forte, alors en réaction, l'air applique une force assez forte pour faire voler le ballon.</p>
</div>
  
  <br>
    <p>Si tu as envie d'utiliser l'action-réaction pour t'amuser tu peux faire ce tuto !</p>
    <br>
    <p>Tu vas apprendre à faire voler un objet !</p>
    <br>
    <p> 
  C'est parti !! 😊 </p>
<br>
    
    <!-- insérer une vidéo -->
  <video src="crayon_verre.mp4" controls="">  </video>
  
    </div>
  </body>
</html>
