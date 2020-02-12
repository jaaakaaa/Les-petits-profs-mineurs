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
  
  <!Choisir la couleur des titres selon le chapitre concerné !!>
<!-- Matière : #b46b2d -->
<!-- Lumière : rgb(181, 175, 20) -->
<!-- Energie : rgb(185, 5, 5) -->
<!-- SVT : rgb(5, 163, 35) -->
<!-- Univers : rgb(95, 120, 170) -->
<!-- Expérience : #09a0b4-->
<!-- Maths #ff0047 -->
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
      
          <h1 style="color:#050980;"> Les ensembles </h1>

		      

		      <div id="texte"> 
		      <p style="text-indent: 35.4pt;">En cours de math&eacute;matiques, on t&rsquo;a donc appris &agrave; compter, en cr&eacute;ant des &lsquo;&rsquo;objets&rsquo;&rsquo; qui s&rsquo;appellent des <strong>nombres</strong>, qui peuvent t&rsquo;aider &agrave; compter les choses qui t&rsquo;entourent.</p>
<p>Une chose qu&rsquo;on aime bien faire en math&eacute;matiques c&rsquo;est ranger les &lsquo;&rsquo;objets&rsquo;&rsquo; que l&rsquo;on cr&eacute;e dans des bo&icirc;tes.</p>
<p>Mais qu&rsquo;est-ce que cela veut dire&nbsp;?</p>
<p>En math&eacute;matiques, tu as cr&eacute;&eacute; des<strong> nombres</strong>, et je t&rsquo;ai montr&eacute; que tu pouvais cr&eacute;er des nombres toujours plus grands. On peut aussi s&rsquo;amuser &agrave; cr&eacute;er d&rsquo;autres choses, comme des &lsquo;&rsquo;bo&icirc;tes&rsquo;&rsquo;, pour ranger les objets cr&eacute;&eacute;s. Les bo&icirc;tes, en math&eacute;matiques, s&rsquo;appellent des <strong>ensembles</strong>.</p>


<div align="center"> <img src="Images/ensemble.png" alt='fail ...'> </div>

<p>Tout comme tu peux ranger tes billes dans un sac et former un <strong>ensemble </strong>de billes, tu peux ranger autant de nombres que tu veux dans des <strong>ensembles </strong>de nombres, que l&rsquo;on aime repr&eacute;senter avec des grosses patates comme &ccedil;a&nbsp;<span style="font-family: 'Segoe UI Emoji',sans-serif;">😊</span></p>
<p>On peut donc cr&eacute;er n&rsquo;importe quel type d&rsquo;<strong>ensembles</strong> de nombres&nbsp;; celui que j&rsquo;ai cr&eacute;&eacute; en haut contient par exemple 6 <strong>nombres</strong> en tout&nbsp;: 1&nbsp;; 2&nbsp;; 35&nbsp;; 76&nbsp;; 100 et 523469.</p>
<p>On a vu qu&rsquo;on pouvait cr&eacute;er des <strong>nombres</strong> toujours plus grands, en les additionnant entre eux. De la m&ecirc;me fa&ccedil;on, on peut cr&eacute;er des <strong>ensembles</strong> toujours plus gros, en ajoutant des nouveaux <strong>nombres </strong>dedans.</p>
<p>J&rsquo;ai cr&eacute;&eacute; en haut un ensemble en ajoutant des nombres au hasard dedans&nbsp;; ces nombres n&rsquo;ont rien de particulier. Cependant, il existe en math&eacute;matiques des ensembles c&eacute;l&egrave;bres, qui ont une &eacute;norme importance.</p>
<p><u>L&rsquo;ensemble </u><u>N:</u></p>
<p>Pr&eacute;c&eacute;demment, je t&rsquo;ai rappel&eacute; que tu avais, avec ta maitresse, cr&eacute;&eacute; des chiffres et des nombres. Mais alors, tu peux d&eacute;cider de ranger tous les nombres que tu as cr&eacute;&eacute;s dans un <strong>ensemble</strong>.</p>
<p>Il existe donc un ensemble appel&eacute; &nbsp;qui contient tous les nombres qui existent.</p>
<p>Mais cette fois, je ne vais pas pouvoir dessiner &nbsp;avec une patate comme tout &agrave; l&rsquo;heure, car &nbsp;contient une <strong>infinit&eacute;</strong> de nombres, comme je te l&rsquo;ai expliqu&eacute;. C&rsquo;est une bo&icirc;te qui est <strong>infiniment </strong>grande. <em>Il n&rsquo;existe pas dans la r&eacute;alit&eacute; de bo&icirc;tes infinies comme &ccedil;a&nbsp;; mais tu peux imaginer que tous les nombres que tu connais sont rang&eacute;s dans un <strong>ensemble</strong>.</em></p>
		  	    
	        </div>

	    <!-- Insérer une image -->
	    

      
        <div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
    </div>
  </body>
</html>