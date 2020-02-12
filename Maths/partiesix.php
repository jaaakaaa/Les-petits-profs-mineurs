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
      
          <h1 style="color: #050980;"> L'ensemble <span style="font-family: 'Cambria Math',serif;">ℚ</span></h1>

		      
		      <div id="texte"> <!-- Zone de texte -->
		  	    <p>Avant de commencer cette nouvelle histoire, reprenons rapidement ce que nous avons appris dans les pr&eacute;c&eacute;dents &eacute;pisodes.</p>
<p>Je t&rsquo;ai au d&eacute;but expliqu&eacute; que tous les nombres que tu connaissais jusqu&rsquo;&agrave; aujourd&rsquo;hui s&rsquo;appelaient <strong>nombres entiers naturels</strong> et &eacute;taient rang&eacute;s dans l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>. Il &eacute;tait alors possible de repr&eacute;senter ces nombres sur un <strong>axe</strong>, avec un ordre indiqu&eacute; par le <strong>sens</strong> de l&rsquo;axe&nbsp;:</p>

<div align="center"> <img src="Images/Q1.png" > </div>


<p>J&rsquo;arr&ecirc;te l&rsquo;axe &agrave; 8, pour des raisons de place, mais je t&rsquo;ai aussi expliqu&eacute; que l&rsquo;axe &eacute;tait <strong>infiniment </strong>grand, et que tu pouvais ajouter tous les nombres que tu connais, de plus en plus grand, &agrave; droite.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Puis dans le pr&eacute;c&eacute;dent &eacute;pisode, je t&rsquo;ai fait remarquer que, depuis tout ce temps, ton ma&icirc;tre ou ta ma&icirc;tresse ne t&rsquo;avait parl&eacute; que de la partie <u>droite</u> de l&rsquo;<strong>axe&nbsp;</strong>: tu ne faisais grandir cet axe que par la droite. Je t&rsquo;ai alors montr&eacute; qu&rsquo;il existait toute une partie de cet <strong>axe</strong> que l&rsquo;on t&rsquo;avait cach&eacute;e, et qui laissait appara&icirc;tre une quantit&eacute; <strong>infinie</strong> de nouveaux nombres que l&rsquo;on appelle <strong>nombres entiers n&eacute;gatifs&nbsp;</strong>:</p>

<div align="center"> <img src="Images/Q2.png" > </div>

<p>Les <strong>nombres entiers naturels </strong>(ou <strong>positifs</strong>) et les <strong>nombres entiers n&eacute;gatifs </strong>forment un ensemble plus gros encore, qui s&rsquo;appelle <strong>ensemble des entiers <u>relatifs</u></strong> <span style="font-family: 'Cambria Math',serif;">ℤ</span>.</p>
<p>Donc l&agrave; tu dois s&ucirc;rement te dire&nbsp;: &laquo;&nbsp;OK, c&rsquo;est vrai que tout ce temps l&rsquo;on m&rsquo;avait cach&eacute; l&rsquo;autre partie de l&rsquo;axe des nombres, celle qui se trouve &agrave; gauche. Mais maintenant, je connais tous les nombres. L&rsquo;axe est infini des deux c&ocirc;t&eacute;s maintenant, donc on ne peut plus rien me cacher&nbsp;!&nbsp;&raquo;.</p>
<p>Et bien&hellip; non, en fait&nbsp;!</p>
<p>Il existe encore d&rsquo;autres nombres (beaucoup, beaucoup d&rsquo;autres nombres&nbsp;!...) dont je ne t&rsquo;ai pas encore parl&eacute;. Et je vais m&ecirc;me te r&eacute;v&eacute;ler un secret&nbsp;: ces autres nombres sont pr&eacute;sents sur l&rsquo;axe qui se trouve juste au-dessus&nbsp;!&nbsp;<span style="font-family: 'Segoe UI Emoji',sans-serif;">😉</span></p>
<p>&laquo;&nbsp;Mais comment c&rsquo;est possible&nbsp;?!&nbsp;&raquo;, te dis-tu s&ucirc;rement.</p>
<p>Tu penses qu&rsquo;il n&rsquo;y a plus de place sur l&rsquo;axe parce qu&rsquo;on l&rsquo;a prolong&eacute; des deux c&ocirc;t&eacute;s jusqu&rsquo;&agrave; l&rsquo;infini et qu&rsquo;on ne peut plus le prolonger autrement&nbsp;? Je te propose alors de zoomer un peu sur cet axe&nbsp;:</p>

<div align="center"> <img src="Images/Q3.png" > </div>

<p>Ici&nbsp;: ne penses-tu pas qu&rsquo;il reste un peu de place, finalement&nbsp;?</p>
<p>Apr&egrave;s cette longue introduction (du coup je peux mettre &ccedil;a dans un autre article &agrave; part) je vais pouvoir commencer cette nouvelle histoire, et je vais te parler d&rsquo;un nouvel ensemble de <strong>nombres</strong>, qui s&rsquo;appelle les <strong><u>fractions</u></strong><u>.</u></p>
<p>A chaque fois que l&rsquo;on cr&eacute;e un nouvel ensemble de nombres, c&rsquo;est pour pouvoir d&eacute;crire une certaine situation, un certain type de probl&egrave;mes. Par exemple, si l&rsquo;on a introduit les <strong>nombres entiers n&eacute;gatifs</strong>, c&rsquo;est pour pouvoir parler des <strong>d&eacute;placements</strong>, et plus particuli&egrave;rement du fait de <strong>reculer</strong> sur un chemin qui poss&egrave;de un <strong>sens</strong>.</p>
<p>En ce qui concerne les <strong>fractions</strong>, celles-ci ont &eacute;t&eacute; cr&eacute;&eacute;es pour pouvoir parler de <strong>partage</strong> et ensuite de <strong>r&eacute;partition</strong>.</p>

<div align="center"> <img src="Images/Q4.png" > </div>

<p>Prenons ce g&acirc;teau par exemple. Imaginons que je veuille <strong>partager</strong>, couper, ce g&acirc;teau en plusieurs <strong>parts</strong>. On va imaginer que je veuille le couper en quatre <strong>parts <u>&eacute;gales</u></strong><u>.</u></p>

<div align="center"> <img src="Images/Q5.png" > </div>
<div align="center"> <img src="Images/Q6.png" > </div>

<p>&nbsp;</p>
<p>Comme je suis gentil, je vais te donner une des parts de ce g&acirc;teau. Tiens&nbsp;:</p>

<div align="center"> <img src="Images/Q7.png" > </div>

<p>Au d&eacute;part, on sait qu&rsquo;on avait <strong>un </strong>(<strong> 1</strong> ) g&acirc;teau. Mais maintenant que je t&rsquo;ai donn&eacute; cette part, combien de g&acirc;teaux as-tu&nbsp;?</p>
<p>Puisque j&rsquo;ai coup&eacute; le g&acirc;teau en quatre et que je t&rsquo;ai donn&eacute; l&rsquo;une des parts, tu sais que tu as forc&eacute;ment moins que <strong>un </strong>g&acirc;teau. Mais tu n&rsquo;en as pas <strong>z&eacute;ro </strong>non plus. Il faut donc que l&rsquo;on cr&eacute;e un nouveau nombre pour pouvoir compter le nombre de g&acirc;teaux que tu as&nbsp;: on va alors dire que tu as <strong>un quart</strong> de g&acirc;teaux, et on va noter ce nouveau nombre &lsquo;&rsquo; <sup>1</sup>&frasl;<sub>4</sub> &rsquo;&rsquo; ou  <img src="Images/1sur4.png" >. </p>
<p>En fait, lorsqu&rsquo;on coupe une chose en quatre parts <strong>&eacute;gales</strong>, chaque part s&rsquo;appelle un <strong>quart</strong> de la chose. Et puisque je t&rsquo;ai donn&eacute; une seule de ces parts, tu as &agrave; la fin <strong>un quart</strong> (du g&acirc;teau initial).</p>
<p>Mais pourquoi est-ce qu&rsquo;on note ce nombre &lsquo;&rsquo;<sup>1</sup>&frasl;<sub>4</sub> &rsquo;&rsquo;&nbsp;?<br />La barre entre le &lsquo;&rsquo;1&rsquo;&rsquo; et le &lsquo;&rsquo;4&rsquo;&rsquo; (qui s&rsquo;appelle la <strong>barre de fraction</strong>) signifie &lsquo;&rsquo;sur&rsquo;&rsquo;, ou alors &lsquo;&rsquo;parmi&rsquo;&rsquo;. Ici j&rsquo;ai coup&eacute; le g&acirc;teau en <strong>4 </strong>parts <u>&eacute;gales</u>, et je t&rsquo;ai donn&eacute; <strong>1 </strong>de ces parts&nbsp;: tu en as donc <strong>une <u>sur</u> quatre</strong>, ou <strong>une <u>parmi</u> </strong>les <strong>quatre</strong>.</p>
<p>Si je t&rsquo;avais donn&eacute; la quantit&eacute; de g&acirc;teaux suivante</p>


<div align="center"> <img src="Images/Q8.png" > </div>

<p>tu aurais alors cette fois <strong>trois</strong> quarts parmi les <strong>quatre</strong> quarts que j&rsquo;avais form&eacute;s au d&eacute;part&nbsp;: donc tu aurais une quantit&eacute; de g&acirc;teaux &eacute;gale &agrave; <strong><sup>3</sup>&frasl;<sub>4</sub></strong>(<strong>trois quarts</strong>).</p>
<p>Mais que je te donne <sup>1</sup>&frasl;<sub>4</sub>de g&acirc;teaux ou <sup>3</sup>&frasl;<sub>4</sub>de g&acirc;teaux, dans les deux cas tu as moins que 1 g&acirc;teau. Donc on vient de cr&eacute;er deux nouveaux nombres, qui se trouvent entre 0 et 1&nbsp;:</p>

<div align="center"> <img src="Images/Q9.png" > </div>

<p>Remarque&nbsp;: &lsquo;&rsquo; <sup>2</sup>&frasl;<sub>4</sub>&rsquo;&rsquo; peut aussi s&rsquo;&eacute;crire &lsquo;&rsquo;<sup>1</sup>&frasl;<sub>2</sub> &rsquo;&rsquo;, car si je te donne &lsquo;&rsquo;deux quarts&rsquo;&rsquo; c&rsquo;est comme si je t&rsquo;avais donn&eacute; directement la moiti&eacute; du g&acirc;teau, donc <strong>une</strong> <strong>moiti&eacute;</strong> du g&acirc;teau <strong><u>sur</u> les deux</strong>. On appelle &lsquo;&rsquo;<sup>1</sup>&frasl;<sub>2</sub> &rsquo;&rsquo; &laquo;&nbsp;<strong>un demi</strong>&nbsp;&raquo;.</p>
<p>J&rsquo;aurais aussi pu couper le g&acirc;teau en 3 <strong>parts <u>&eacute;gales&nbsp;</u></strong>:</p>

<div align="center"> <img src="Images/Q10.png" > </div>


<p>Cette fois je n&rsquo;obtiens plus &laquo;&nbsp;un quart&nbsp;&raquo; mais &laquo;&nbsp;un <strong>tiers</strong>&nbsp;&raquo;. On peut former trois <strong>tiers </strong>avec un g&acirc;teau. Cette quantit&eacute; de g&acirc;teaux que tu peux voir au-dessus est <sup>1</sup>&frasl;<sub>3</sub>.</p>
	        </div>


     
      
      
</div>  <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
      
    </div>
  </body>
</html>