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
  <!Choisir la couleur des titres selon le chapitre concerné !!>
<!-- Matière : #b46b2d -->
<!-- Lumière : rgb(181, 175, 20) -->
<!-- Energie : rgb(185, 5, 5) -->
<!-- SVT : rgb(5, 163, 35) -->
<!-- Univers : rgb(95, 120, 170) -->
<!-- Expérience : #09a0b4-->
<!-- Maths #050980 -->

    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
      
          <h1 style="color:#050980;"> Représentations graphiques </h1>

		      <h2 style="color:[REMPLACER PAR UNE COULEUR];">  </h2>

		      <div id="texte"> 

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gr&acirc;ce au chapitre pr&eacute;c&eacute;dent, tu sais maintenant ce qu&rsquo;est une fonction. Une chose que tu dois bien garder &agrave; l&rsquo;esprit, c&rsquo;est qu&rsquo;en math&eacute;matiques, on aime repr&eacute;senter des v&eacute;rit&eacute;s <strong>g&eacute;n&eacute;rales</strong>, c&rsquo;est-&agrave;-dire vraies pour <strong>n&rsquo;importe quel nombre</strong>, et pas seulement pour des <strong>exemples particuliers</strong>.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si j&rsquo;ai une fonction f, je ne vais pas la d&eacute;crire gr&acirc;ce &agrave; la transformation de 7, de 3 ou encore de 26. Je vais la d&eacute;crire gr&acirc;ce &agrave; la lettre <strong>x</strong>, qui <strong>symbolise</strong> un nombre, n&rsquo;importe lequel (voir chapitre pr&eacute;c&eacute;dent).</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sauf qu&rsquo;avec la lettre <strong>x</strong>, on comprend moins bien la transformation &hellip; Si je reprends l&rsquo;exemple du chapitre pr&eacute;c&eacute;dent, o&ugrave; f est la transformation &laquo;&nbsp;addition avec 3&nbsp;&raquo;, alors dire que &lsquo;&rsquo;f(x) = x + 3&rsquo;&rsquo; est moins clair que de dire &lsquo;&rsquo;f(7) = 7 + 3 = 10&rsquo;&rsquo;. Nous on aime bien avoir des <strong>valeurs</strong> pour comprendre ce que fait f, et pas seulement une description de la transformation &lsquo;&rsquo;f(x)&rsquo;&rsquo;. C&rsquo;est pour &ccedil;a qu&rsquo;on a invent&eacute; ce qui s&rsquo;appelle des <strong>repr&eacute;sentations graphiques</strong>.</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pour comprendre ce que c&rsquo;est, il faut d&rsquo;abord parler des <strong>axes gradu&eacute;s</strong>.</p>
<p>Tu as appris qu&rsquo;il existait des nombres, et que ces nombres suivaient un certain ordre&nbsp;: d&rsquo;abord 0, puis 1, puis 2, etc. On peut repr&eacute;senter visuellement ces nombres et cet ordre avec un <strong>axe&nbsp;</strong>:</p>

<div align="center"> <img src="Images/graph1.png" alt='fail ...' style=""> </div>

<p>Comme tu peux le voir, un <strong>axe gradu&eacute;</strong> est une ligne droite, o&ugrave; sont repr&eacute;sent&eacute;s les nombres dans le bon ordre, de gauche &agrave; droite. Chaque nombre se trouve en dessous d&rsquo;un tiret, qu&rsquo;on appelle <strong>graduation. </strong>Il y a deux &eacute;l&eacute;ments importants&nbsp;:</p>


<div align="center"> <img src="Images/graph2.png" alt='fail ...' style=""> </div>

<p>L&rsquo;origine c&rsquo;est le nombre depuis lequel on commence l&rsquo;axe (depuis lequel on commencer &agrave; graduer).</p>
<p>Le sens sert &agrave; nous rappeler dans quel ordre les nombres grandissent&nbsp;: ici c&rsquo;est bien de gauche &agrave; droite.</p>
<p>La distance entre deux graduations n&rsquo;a pas d&rsquo;importance&nbsp;; mais elle doit toujours &ecirc;tre la m&ecirc;me, car entre deux graduations, il y a toujours la distance 1.</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintenant que tu as compris ce qu&rsquo;&eacute;tait un axe, je vais pouvoir t&rsquo;expliquer ce qu&rsquo;est un <strong>rep&egrave;re</strong>, et ce sera bon&nbsp;!</p>
<p>Un <strong>rep&egrave;re</strong>, c&rsquo;est <strong>deux</strong> axes, qui pointent vers des directions diff&eacute;rentes, et qui ont la m&ecirc;me origine&nbsp;:</p>

<div align="center"> <img src="Images/graph3.png" alt='fail ...' style=""> </div>


<p style="text-align: justify;">On a donc repr&eacute;sent&eacute; deux fois l&rsquo;ordre des nombres, une fois de gauche &agrave; droite, l&rsquo;autre fois de bas en haut. Les deux axes sont ind&eacute;pendants, donc les distance entre les nombres en haut et en bas n&rsquo;est pas forc&eacute;ment la m&ecirc;me&nbsp;; mais elle doit rester identique partout en haut, et partout &agrave; droite.</p>
<p style="text-align: justify;">A quoi &ccedil;a sert&nbsp;?!!</p>
<p style="text-align: justify;">En utilisant un <strong>rep&egrave;re</strong>, je vais pouvoir faire une <strong>repr&eacute;sentation graphique</strong> de la fonction f, c&rsquo;est-&agrave;-dire que je vais pouvoir repr&eacute;senter la fonction f pour tous les nombres et ainsi comprendre ce que fait f, et voir &agrave; quoi ressemble f.</p>
<p style="text-align: justify;">Je sais que f(2) = 2 + 3 = 5. Donc le nombre &lsquo;&rsquo;2&rsquo;&rsquo; est transform&eacute; en le nombre &lsquo;&rsquo;5&rsquo;&rsquo; par f. L&rsquo;id&eacute;e est de dire que les nombres <span style="color: blue;">&agrave; transformer </span>sont en <span style="color: blue;">bas </span><span style="color: black;">et les nombres </span><span style="color: red;">transform&eacute;s </span><span style="color: black;">sont en </span><span style="color: red;">haut.</span></p>


<div align="center"> <img src="Images/graph4.png" alt='fail ...' style=""> </div>


<p style="text-align: justify;">J&rsquo;ai rajout&eacute; un <strong>quadrillage</strong>, c&rsquo;est-&agrave;-dire plein de lignes droites pour qu&rsquo;on puisse mieux voir les transformations.</p>
<p style="text-align: justify;">Tu peux voir que j&rsquo;ai &eacute;crit un &lsquo;&rsquo;A&rsquo;&rsquo; sur l&rsquo;image. A est un <strong>point</strong>. En fait, tous les croisements (<em>intersections</em>) entre les lignes droites sont des points. Un <strong>rep&egrave;re</strong> permet donc de cr&eacute;er des points, et on peut donner un nom &agrave; chaque point&nbsp;; c&rsquo;est ainsi que j&rsquo;en ai nomm&eacute; un &lsquo;&rsquo;A&rsquo;&rsquo;.</p>
<p style="text-align: justify;">Mais avant d&rsquo;avoir un nom, un point a d&rsquo;abord une <strong>position</strong>. En fait, c&rsquo;est le rep&egrave;re qui donne &agrave; chaque point une position, qui permet de localiser ce point. Et cette position, on l&rsquo;obtient gr&acirc;ce aux nombres sur les deux <strong>axes</strong>.</p>
<p style="text-align: justify;">Chaque point se trouve au croisement de deux lignes droites&nbsp;: une qui va de <strong><span style="color: blue;">bas vers le haut</span></strong>, et l&rsquo;autre qui va de <strong><span style="color: red;">gauche vers la droite</span>. </strong>Mais justement, ces deux droites poss&egrave;dent un num&eacute;ro, celui du nombre dont elles proviennent. Par exemple, le point A se trouve au croisement de la ligne qui <span style="color: blue;">vient du bas </span>au nombre <span style="color: blue;">2</span>, et de la ligne qui <span style="color: red;">vient de la gauche</span> au nombre <span style="color: red;">5</span>. On dit donc que le point A se trouve &agrave; la <strong>position</strong> (2&nbsp;; 5).</p>
<p style="text-align: justify;">Je n&rsquo;ai pas choisi de donner un nom &agrave; ce point par hasard&nbsp;; ce point permet de montrer la transformation du nombre 2 par la fonction f. Si je <span style="color: blue;">pars de 2 </span>et que je suis transform&eacute; par f, alors je vais <span style="color: red;">arriver en 5&nbsp;</span>; je mets donc un point &agrave; la position (2&nbsp;; 5), et je lui donne un nom, A, et surtout je le mets en valeur avec un point de couleur verte pour qu&rsquo;on puisse le diff&eacute;rencier des autres.</p>
<p style="text-align: justify;">Mais comme je l&rsquo;ai dit au d&eacute;but, en math&eacute;matiques, on veut &ecirc;tre <strong>g&eacute;n&eacute;ral</strong>.&nbsp; Donc, je ne veux pas seulement montrer la transformation du nombre 2 par la fonction f en mettant un point en valeur, mais je veux montrer la transformation de tous les nombres sur l&rsquo;axe du bas, en mettant des points verts partout, exactement comme pour le point A&nbsp;:</p>

<div align="center"> <img src="Images/graph5.png" alt='fail ...' style=""> </div>


<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">J&rsquo;ai donc, selon le m&ecirc;me principe, colori&eacute; en vert tous les points qui correspondent &agrave; une transformation par la fonction f. Je ne les ai pas mis en valeur, comme pour le point A, car sinon l&rsquo;image obtenue serait moins jolie&nbsp;: mais tous les points verts sont exactement comme le point A.</p>


<a onclick="spoiler('spoiler1')" style="border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;width:100%;" href="#rien"><pr> En savoir plus </pr></a>
<div id="spoiler1" style="border-radius:5px;border: 2px solid gray; display: none; padding: 15px;margin:0px;">
   <p style="text-align: justify; border: none; padding: 0cm;">Tu peux remarquer qu&rsquo;il y a des points verts correspondant &agrave; des transformations de nombres entre 0 et 1, ou entre 2 et 3, ou encore entre 6 et 7, etc. C&rsquo;est parce que je n&rsquo;ai pas seulement repr&eacute;sent&eacute; les transformations des <strong>nombres entiers</strong> (ceux appartenant &agrave; l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>), mais aussi de tous les <strong>nombres r&eacute;els </strong>(ceux appartenant &agrave; <span style="font-family: 'Cambria Math',serif;">ℝ) </span>situ&eacute;s entre 0 et 12. Je t&rsquo;ai d&eacute;j&agrave; expliqu&eacute; dans le chapitre sur l&rsquo;infini <strong>(cf) </strong>qu&rsquo;il existait une infinit&eacute; de nombres r&eacute;els entre 0 et 1, comme par exemple &nbsp;= 0,25. Et ces nombres aussi peuvent &ecirc;tre transform&eacute;s&nbsp;! Si je veux transformer 0,25 alors je vais obtenir 0,25 +</p>
<p style="text-align: justify; border: none; padding: 0cm;">&nbsp;= 3,25 =</p>
<p style="text-align: justify; border: none; padding: 0cm;">C&rsquo;est pour &ccedil;a que entre 0 et 1 (ou entre 2 et 3, &hellip;), tu observes une <strong>ligne continue</strong>. Si je n&rsquo;avais repr&eacute;sent&eacute; que les transformations des nombres entiers, alors je n&rsquo;aurais eu que 13 transformations (et pas une infinit&eacute;), donc je n&rsquo;aurais obtenu que des points <strong>isol&eacute;s</strong>, comme A.</p>
</div>


<p style="text-align: justify;">Cette ligne droite verte que j&rsquo;ai cr&eacute;&eacute;e, s&rsquo;appelle <strong><u>repr&eacute;sentation graphique</u></strong> de la fonction f (entre 0 et 12). On peut consid&eacute;rer que cette ligne droite est l&rsquo;apparence de la fonction f.</p>
<p style="text-align: justify;">Elle est tr&egrave;s utile car, gr&acirc;ce &agrave; elle, je peux transformer n&rsquo;importe quel nombre. Je pouvais d&eacute;j&agrave; le faire gr&acirc;ce &agrave; l&rsquo;expression &lsquo;&rsquo;f(x)&rsquo;&rsquo;&nbsp;; mais maintenant je peux le faire directement sur le dessin de la <strong>repr&eacute;sentation graphique.</strong></p>
<p style="text-align: justify;">Par exemple, je veux conna&icirc;tre la transformation de 6.</p>
<ol>
<li>Je vais donc sur l&rsquo;axe du <span style="color: blue;">bas&nbsp;</span>;</li>
<li>je vais sur la <span style="color: blue;">ligne qui commence &agrave; <strong>6&nbsp;</strong></span>;</li>
<li>je monte jusqu&rsquo;&agrave; croiser la <strong><span style="color: lime;">repr&eacute;sentation graphique </span></strong><span style="color: lime;">de f&nbsp;</span>;</li>
<li>je vais vers la <span style="color: red;">gauche </span>jusqu&rsquo;&agrave; croiser <span style="color: red;">l&rsquo;axe droit&nbsp;</span>;</li>
<li>je lis <span style="color: red;">le nombre sur l&rsquo;axe&nbsp;: c&rsquo;est la transformation de </span></li>
</ol>

<div align="center"> <img src="Images/graph6.png" alt='fail ...' style=""> </div>

<p style="margin-left: 18.0pt; text-align: justify;">Donc f(<span style="color: blue;">6</span>) = <span style="color: red;">9</span>.</p>
<p style="margin-left: 18.0pt; text-align: justify;">J&rsquo;ai d&eacute;cid&eacute; d&rsquo;appeler le points montrant la transformation (<span style="color: blue;">6</span>,<span style="color: red;">9</span>) B.</p>
<p style="margin-left: 18.0pt; text-align: justify;">Je peux repr&eacute;senter plusieurs autres fonctions sur ce rep&egrave;re&nbsp;:</p>

<div align="center"> <img src="Images/graph7.png" alt='fail ...' style=""> </div>
		      
		  
</div>


      
      
        <div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
    </div>
  </body>
</html>