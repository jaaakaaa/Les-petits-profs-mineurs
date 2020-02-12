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
      
          <h1 style="color:#050980;"> L'ensemble Z </h1>

		      

		      <div id="texte"> <!-- Zone de texte -->
		  	    <p style="text-align: center;"><strong><u></u></strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pr&eacute;c&eacute;demment, je t&rsquo;ai parl&eacute; des <strong>ensembles de nombres</strong>. Nous avons cr&eacute;&eacute; tous les deux l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ, </span>qui contient tous les nombres qui existent. Donc tu dois s&ucirc;rement te dire&nbsp;: OK, alors je n&rsquo;ai plus rien &agrave; d&eacute;couvrir&hellip;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Et bien en fait, je suis d&eacute;sol&eacute; de te l&rsquo;apprendre, mais je t&rsquo;ai menti&hellip; Enfin, NOUS t&rsquo;avons menti, tes professeurs et moi.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quand ton ma&icirc;tre ou ta ma&icirc;tresse t&rsquo;ont aid&eacute; &agrave; cr&eacute;er les nombres, en commen&ccedil;ant par 0, puis 1, puis 2, etc&hellip;, il (ou elle) ne t&rsquo;a pas tout dit. En fait, tous ces nombres, dont nous avons parl&eacute; jusqu&rsquo;&agrave; pr&eacute;sent, et que tu connais, qui sont dans l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>, ce ne sont <strong>pas</strong> tous les nombres qui existent&nbsp;! Il en existe d&rsquo;autres, dont ta ma&icirc;tresse ou ton ma&icirc;tre ne t&rsquo;ont pas encore parl&eacute;, et dont je vais te parler maintenant&nbsp;!</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Les nombres que tu connais (1, 2, 3, 10, 20, 100, 1000, etc&hellip;), que tu obtiens <strong>en comptant</strong>, ceux de l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>, ils ont un nom sp&eacute;cial&nbsp;: on les appelle les <strong>nombres entiers naturels </strong>(ou <strong>positifs</strong>). C&rsquo;est pour &ccedil;a que le symbole de l&rsquo;ensemble est un "<span style="font-family: 'Cambria Math',serif;">ℕ</span>" : c&rsquo;est le "n" de <strong>naturel.</strong> Je vais expliquer ce nom plus tard&nbsp;; mais tu dois simplement comprendre qu&rsquo;ils forment ensemble une <strong>cat&eacute;gorie</strong> de nombres. Mais il existe d&rsquo;autres cat&eacute;gories. Je vais t&rsquo;en pr&eacute;senter une autre.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ici, je vais te parler des <strong>nombres entiers n&eacute;gatifs</strong>. Pour t&rsquo;aider &agrave; comprendre &ccedil;a, nous allons utiliser un <strong>axe gradu&eacute;</strong>. Si tu ne te souviens plus de ce que c&rsquo;est, je t&rsquo;invite &agrave; lire <strong>le d&eacute;but</strong> de l&rsquo;article <em>Repr&eacute;sentations graphiques</em>, dans la section <em>Fonctions et repr&eacute;sentations graphiques</em> (<strong>cf</strong>).</p>
<p>On se rappelle, un axe gradu&eacute; poss&egrave;de une <strong>origine</strong> et un <strong>sens</strong>.</p>


<div align="center"> <img src="Images/Z1.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>


<p>Les <strong>nombres entiers n&eacute;gatifs</strong> existent pour pouvoir parler des <strong>d&eacute;placements</strong>.</p>
<p>On va donc imaginer qu&rsquo;il existe sur l&rsquo;axe un bonhomme, qui va justement se d&eacute;placer.</p>


<div align="center"> <img src="Images/Z2.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>


<p>On peut rep&eacute;rer la <strong>position</strong> du bonhomme gr&acirc;ce aux nombres sur l&rsquo;axe.</p>
<p>Quand on se d&eacute;place, on &laquo;&nbsp;avance&nbsp;&raquo; toujours vers quelque part, d&rsquo;une certaine <strong>longueur</strong>, ou <strong>distance </strong>(c&rsquo;est la m&ecirc;me chose). Or, une <strong>longueur</strong>, c&rsquo;est toujours un <strong>nombre entier naturel</strong>, parce que c&rsquo;est quelque chose que tu peux <em>mesurer</em> avec ta r&egrave;gle, quelque chose que tu peux <em>compter</em>. Si tu te d&eacute;places pour aller &agrave; l&rsquo;&eacute;cole, alors tu avances vers l&rsquo;&eacute;cole, d&rsquo;une <strong>distance </strong>&eacute;gale &agrave; la <strong>longueur</strong> du trajet depuis ta maison jusqu&rsquo;&agrave; l&rsquo;&eacute;cole. Mais ici, le bonhomme se trouve sur un axe qui poss&egrave;de un <strong>sens</strong>, ce qui signifie qu&rsquo;on est &laquo;&nbsp;cens&eacute;&nbsp;&raquo; avancer dans le sens de l&rsquo;axe. Donc &laquo;&nbsp;avancer&nbsp;&raquo;, pour le bonhomme, sans plus de pr&eacute;cision, &ccedil;a signifie &laquo;&nbsp;avancer vers la <strong>droite</strong>&nbsp;&raquo;.</p>
<p>En fait, il faut plut&ocirc;t dire que, si je ne pr&eacute;cise pas le sens du d&eacute;placement (par exemple le sens " 5 vers 4", ou "1 vers 2", &hellip;), alors &ccedil;a veut forc&eacute;ment dire que le sens est celui de l&rsquo;axe, donc que <strong>avancer</strong> c&rsquo;est <strong>aller vers la droite</strong>.</p>
<p>On va donc imaginer que le bonhomme se d&eacute;place de deux graduations.</p>

<div align="center"> <img src="Images/Z3.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>
<div align="center"> <img src="Images/Z4.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>

<p>Le bonhomme a avanc&eacute; de deux graduations, donc il se trouve maintenant au nombre 5.</p>
<p>Mais imaginons que le bonhomme soit pris d&rsquo;un &eacute;lan de folie, et d&eacute;cide de se d&eacute;placer dans le sens inverse, de 1 graduation&nbsp;!</p>


<div align="center"> <img src="Images/Z5.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>
<div align="center"> <img src="Images/Z6.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>


<p>Puisque le sens de l&rsquo;axe est vers la droite, cette fois le bonhomme a <strong>recul&eacute;</strong>. Il a recul&eacute; d&rsquo;une <strong>longueur</strong> 1.</p>
<p>Mais tout-&agrave; l&rsquo;heure je disais que &laquo;&nbsp;<strong>se d&eacute;placer</strong>&nbsp;&raquo;, &ccedil;a veut toujours dire &laquo;&nbsp;<strong>avancer</strong> vers quelque part&nbsp;&raquo;. Ici par exemple, le bonhomme a <strong>avanc&eacute; </strong>vers 4 depuis 5, d&rsquo;une <strong>longueur</strong> &eacute;gale &agrave; 1, qui est bien un <strong>nombre entier naturel</strong>.</p>
<p>Mais je ne peux pas dire seulement que &laquo;&nbsp;le bonhomme a <strong>avanc&eacute;</strong> de 1&nbsp;&raquo;, parce que, comme je l&rsquo;ai dit plus haut, &agrave; cause du <strong>sens</strong> de l&rsquo;axe, &laquo;&nbsp;<strong>avancer </strong>d&rsquo;une <strong>longueur</strong>, qui est un <strong>nombre entier naturel</strong>&nbsp;&raquo;, sans pr&eacute;cision du sens du d&eacute;placement, c&rsquo;est la <u>m&ecirc;me chose</u> que &laquo;&nbsp;<strong>se d&eacute;placer </strong>vers la droite&nbsp;&raquo;.</p>
<p>Donc, pour dire que le bonhomme a <strong>avanc&eacute; vers la gauche</strong>, puisque je ne peux pas utiliser les <strong>nombres entiers naturels</strong>, je suis oblig&eacute; de cr&eacute;er des nouveaux nombres&nbsp;: les <strong>nombres entiers n&eacute;gatifs</strong>. C&rsquo;est ainsi que je ne dirai pas que &laquo;&nbsp;le bonhomme a <strong>recul&eacute;</strong> de 1&nbsp;&raquo;, mais que &laquo;&nbsp;le bonhomme a <strong>avanc&eacute;</strong> de <strong><u>moins un ("- 1")&nbsp;&raquo;.</u></strong></p>
<p style="line-height: 150%;">Je vais r&eacute;sumer &ccedil;a dans un tableau&nbsp;:</p>

<div align="center" > <img src="Images/Z10.png" style="width:100%"> </div>


<p>Ce qu&rsquo;il faut bien comprendre ici, c&rsquo;est que je n&rsquo;ai plus besoin de pr&eacute;ciser le sens du d&eacute;placement. En fait, je consid&egrave;re cette fois le sens de l&rsquo;axe.</p>
<p>Quand je dis que lors du premier d&eacute;placement, le bonhomme a avanc&eacute; d&rsquo;une <strong>longueur</strong> 2, et que lors du 2eme d&eacute;placement, le bonhomme a avanc&eacute; de <strong>moins un</strong>, je regarde toujours le sens de l&rsquo;axe.</p>
<p>Les <strong>nombre n&eacute;gatifs</strong> permettent de dire qu&rsquo;on <strong>recule</strong>, en utilisant le verbe "<strong>avancer"</strong>, et c&rsquo;est bien ce qu&rsquo;on voulait, car se d&eacute;placer c&rsquo;est avancer vers quelque part.</p>
<p>Lors du deuxi&egrave;me d&eacute;placement, <strong>par rapport au sens de l&rsquo;axe</strong>, le bonhomme a <strong>avanc&eacute;</strong> de <strong>moins un</strong> <strong>("- 1")</strong>, ce qui veut exactement dire qu&rsquo;il a <strong>avanc&eacute;</strong> d&rsquo;une <strong>longueur un (1) </strong>dans le <strong>sens inverse</strong> de celui de l&rsquo;axe.</p>
<p>&nbsp;</p>
<p>En r&eacute;sum&eacute;&nbsp;: si l&rsquo;on veut seulement <strong>compter</strong> des choses, alors les <strong>nombres entiers <u>naturels</u></strong> suffisent. Mais si, dans le comptage, il y a un <strong>sens</strong> de parcours (comme par exemple pour le d&eacute;placement sur un axe gradu&eacute; qui poss&egrave;de un <strong>sens</strong>), alors on doit utiliser <u>aussi</u> les <strong>nombres entiers <u>n&eacute;gatifs</u></strong>.</p>
<p>Maintenant que je t&rsquo;ai parl&eacute; de leur existence, je vais te dire qui sont les <strong>nombres entiers <u>n&eacute;gatifs</u></strong>.</p>
<p>Tu en connais d&eacute;j&agrave; un&nbsp;: c&rsquo;est "moins un", que l&rsquo;on note " &ndash; 1", donc un "1", o&ugrave; l&rsquo;on ajoute le signe "-" ("moins", le signe de la soustraction) devant. Et bien en fait, les <strong>nombres entiers n&eacute;gatifs</strong> sont exactement les <strong>nombres entiers positifs</strong>, o&ugrave; on ajoute un <strong>"-" </strong>devant. Donc tu peux les compter, comme pour les <strong>nombres entiers naturels&nbsp;</strong>: -1&nbsp;; -2&nbsp;; -3&nbsp;; -4&nbsp;; - 5&nbsp;; &hellip;&nbsp;; - 10&nbsp;; - 11&nbsp;; - 12&nbsp;; &hellip;&nbsp;; - 20&nbsp;; - 21&nbsp;; &hellip;..&nbsp;; - 100&nbsp;; &hellip;&nbsp;; - 1000, etc&hellip;.</p>
<p>Et comme pour les <strong>nombres entiers positifs</strong>, il existe un ordre. Sauf que, comme je te l&rsquo;ai dit, les <strong>nombres entiers n&eacute;gatifs</strong> permettent de dire qu&rsquo;on <strong>avance</strong> "dans le sens" inverse du &laquo;&nbsp;bon sens&nbsp;&raquo;. Donc, de la m&ecirc;me fa&ccedil;on, si tu veux compter les <strong>nombres entiers n&eacute;gatifs</strong>, alors tu vas les compter dans le "sens <strong>inverse</strong>" de celui que tu as appris (le &laquo;&nbsp;bon sens&nbsp;&raquo; est celui des <strong>nombres entiers naturels</strong>, que tu peux appeler aussi <strong>nombres positifs</strong>).</p>
<p>Par exemple, tu as vu que pour les nombres <strong>positifs</strong>, le &laquo;&nbsp;bon ordre&nbsp;&raquo; te dit que 0 est le plus petit <strong>nombre positif</strong>, puis ensuite c&rsquo;est 1, qui est plus petit que 2, qui est plus petit que 3, etc&hellip;</p>
<p>Bah pour les <strong>nombres n&eacute;gatifs</strong>, c&rsquo;est l&rsquo;inverse&nbsp;: - 1 est le plus grand <strong>nombre n&eacute;gatif</strong>&nbsp;; il est plus grand que &ndash; 2, qui est plus grand que &ndash; 3, qui est plus grand que &ndash; 4, etc&hellip;</p>
<p>Ce que tu dois comprendre c&rsquo;est que, lorsque je parle d&rsquo;&ecirc;tre &laquo;&nbsp;plus grand&nbsp;&raquo;, ou &laquo;&nbsp;plus petit&nbsp;&raquo;, c&rsquo;est par rapport au <strong>vrai sens</strong>, au &laquo;&nbsp;bon sens&nbsp;&raquo;, donc &agrave; celui des <strong>nombres entiers positifs.</strong> Pour que tu comprennes mieux, on peut repr&eacute;senter tous les nombres qui existent sur un axe gradu&eacute;, avec le sens que tu connais&nbsp;:</p>


<div align="center" > <img src="Images/Z7.png" style="width:100%"> </div>


<p>Tu vois qu&rsquo;en fait je t&rsquo;avais menti&hellip; Sur l&rsquo;axe gradu&eacute;, avant le 0 (z&eacute;ro), il y avait d&rsquo;autres nombres dont personne ne t&rsquo;avait jamais parl&eacute; encore. L&rsquo;ordre des nombres, qui indique dans quel sens on compte, est donn&eacute; par le sens de l&rsquo;axe. Tu retrouves ce que je t&rsquo;ai dit plus haut&nbsp;: -1 est plus grand que -2, etc.</p>


<a onclick="spoiler('spoiler1')" style="border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;width: 100%;" href="#rien"><pr> En savoir plus </pr></a>
<div id="spoiler1" style="border-radius:5px;border: 2px solid gray; display: none; padding: 15px;margin:0px;">
    <!-- text ici -->

<p>En fait, tes professeurs t&rsquo;ont cach&eacute; plus de choses que ce que tu crois.</p>
<p>Tout &agrave; l&rsquo;heure, j&rsquo;ai dit que lorsque j&rsquo;&eacute;crivais par exemple "moins un ( - 1)", le "moins" qui se trouvait devant le "1" &eacute;tait en fait le m&ecirc;me que celui de la soustraction. Mais ce n&rsquo;est pas juste qu&rsquo;il lui ressemble, c&rsquo;est vraiment le m&ecirc;me&nbsp;!</p>
<p>En fait, ton ma&icirc;tre ou ta maitresse t&rsquo;a dit qu&rsquo;il existait 4 op&eacute;rations sur les <strong>nombres&nbsp;</strong>: l&rsquo;addition, la soustraction, la multiplication et la division.</p>
<p>Et bien en fait, la soustraction est une &laquo;&nbsp;fausse&nbsp;&raquo; op&eacute;ration.</p>
<p>Quand j&rsquo;&eacute;cris par exemple&nbsp;: 3 &ndash; 1 = 2, en r&eacute;alit&eacute;, j&rsquo;&eacute;cris&nbsp;: 3 + (- 1) = 2.</p>
<p>En fait, la soustraction est une &laquo;&nbsp;addition d&eacute;guis&eacute;e&nbsp;&raquo;. Ajouter -1 c&rsquo;est la m&ecirc;me chose que enlever 1. Ca se comprend facilement, car les nombres n&eacute;gatifs servent &agrave; &laquo;&nbsp;aller dans le sens inverse&nbsp;&raquo;. Pour les d&eacute;placements, &laquo;&nbsp;aller dans le sens inverse&nbsp;&raquo; &ccedil;a veut dire reculer, donc si j&rsquo;avance d&rsquo;un nombre n&eacute;gatif &ccedil;a veut dire que je recule&nbsp;; pour l&rsquo;addition c&rsquo;est pareil&nbsp;: si j&rsquo;additionne un nombre n&eacute;gatif, &ccedil;a veut dire que je le soustrais. Dans l&rsquo;exemple du haut, &laquo;&nbsp;ajouter -1&nbsp;&raquo; &ccedil;a veut dire &laquo;&nbsp;enlever 1&nbsp;&raquo;.</p>
<p>Ca se voit sur l&rsquo;axe&nbsp;:</p>

<div align="center"> <img src="Images/Z8.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>


<p>On peut interpr&eacute;ter l&rsquo;expression &laquo;&nbsp;3 + (- 1)&nbsp;&raquo; comme un <strong>d&eacute;placement</strong>. Cela signifie que je pars de 3. Puis, le "+" signifie que je vais ajouter une <strong>distance</strong>, donc que je vais me <strong>d&eacute;placer</strong>. Mais je vais me d&eacute;placer de "-1", et puisque l&rsquo;axe est orient&eacute; vers la <strong>droite</strong>, cela signifie que je vais <strong>avancer vers la gauche</strong> de 1&nbsp;; donc j&rsquo;arrive en 2. Donc 3 + (-1) = 2, qui est la m&ecirc;me chose que 3 &ndash; 1 = 2.</p>
<p style="border: none; padding: 0cm;">Tu n&rsquo;as pas besoin de savoir &ccedil;a pour l&rsquo;instant. On t&rsquo;en reparlera dans quelques ann&eacute;es au coll&egrave;ge&nbsp;; mais le savoir d&egrave;s maintenant &ccedil;a aide&nbsp;<span style="font-family: 'Segoe UI Emoji',sans-serif;">😉</span></p>
</div>

<p>En r&eacute;sum&eacute;, tu connais deux types des <strong>nombres&nbsp;</strong>:</p>
<ul>
<li>Les <strong>nombres entiers naturels (</strong>ou<strong> positifs)</strong>, qui forment &agrave; eux tous l&rsquo;ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>.</li>
<li>Les <strong>nombres entiers n&eacute;gatifs.</strong></li>
</ul>
<p>Il existe un ensemble qui s&rsquo;appelle <strong><u>ensemble des nombres relatifs</u></strong>, qui se note <span style="font-family: 'Cambria Math',serif;">ℤ</span>, et qui contient <strong>tous les</strong> <strong>nombres entiers naturels</strong> et <strong>tous les nombres entiers n&eacute;gatifs. </strong>Donc en fait, <span style="font-family: 'Cambria Math',serif;">ℕ</span> fait partie de <span style="font-family: 'Cambria Math',serif;">ℤ</span>.</p>
<p>Maintenant, tu connais un 2<sup>&egrave;me</sup> ensemble math&eacute;matique tr&egrave;s c&eacute;l&egrave;bre&nbsp;: il s&rsquo;appelle <span style="font-family: 'Cambria Math',serif;">ℤ</span> et il est de taille <strong>infinie</strong> (comme <span style="font-family: 'Cambria Math',serif;">ℕ</span>).</p>
<p>Mais si tu as bien suivi, tu dois commencer &agrave; froncer les sourcils&nbsp;: on a deux ensembles qui ont chacun une taille infinie&nbsp;; pourtant <span style="font-family: 'Cambria Math',serif;">ℤ</span> contient <span style="font-family: 'Cambria Math',serif;">ℕ</span>, mais il contient aussi plein d&rsquo;autres nombres, comme "-1" (en fait il en contient, du coup, deux fois plus que <span style="font-family: 'Cambria Math',serif;">ℕ</span>)&hellip;</p>
<p>Bizarre, n&rsquo;est-ce pas&nbsp;? Tu commences &agrave; comprendre que l&rsquo;infini, que nous avons d&eacute;fini dans un article pr&eacute;c&eacute;dent, n&rsquo;est pas quelque chose que l&rsquo;on peut facilement comprendre.</p>
<p>Ce n&rsquo;est pas parce qu&rsquo;un ensemble est <strong>infini</strong> qu&rsquo;il contient tout ce qui existe. Par exemple, pour construire <span style="font-family: 'Cambria Math',serif;">ℕ</span>, on ajoute 0 puis ensuite on ajoute tous les nombres plus grands que 0. Or, on a vu dans un chapitre pr&eacute;c&eacute;dent qu&rsquo;il existait une infinit&eacute; de nombres plus grand que 0&nbsp;: si je prends un nombre extr&ecirc;mement grand, il me suffira de lui additionner 1, et j&rsquo;obtiendrais un nombre encore plus grand, et ainsi de suite. Donc <span style="font-family: 'Cambria Math',serif;">ℕ </span>est bien infini. Mais on ne fait qu&rsquo;ajouter des nombres "grands", sans se pr&eacute;occuper des nombres "petits", qui eux aussi sont infinis, pour les m&ecirc;mes raisons. Si on regarde l&rsquo;axe&nbsp;:</p>

<div align="center"> <img src="Images/Z9.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>


<p>L&rsquo;axe est <strong>infini</strong>, mais <strong><u>des deux c&ocirc;t&eacute;s</u></strong> de 0&nbsp;! Or, dans <span style="font-family: 'Cambria Math',serif;">ℕ</span>, on ne fait qu&rsquo;ajouter les nombres qui sont <strong>&agrave; droite</strong> de 0. Donc on ajoute tout ce qui existe mais seulement dans une direction, alors que dans <span style="font-family: 'Cambria Math',serif;">ℤ</span> on ajoute tout ce qui existe dans les deux directions.</p>
<p>Cette id&eacute;e de "direction" est une premi&egrave;re chose qui permet de &laquo;&nbsp;diff&eacute;rencier&nbsp;&raquo; les infinis. Car oui&nbsp;: il existe plusieurs <strong>infinis</strong>&hellip;</p>
<p>Mais m&ecirc;me si <span style="font-family: 'Cambria Math',serif;">ℤ</span> semble &laquo;&nbsp;plus gros&nbsp;&raquo; que <span style="font-family: 'Cambria Math',serif;">ℕ</span>, il s&rsquo;agit en fait du m&ecirc;me <strong>infini</strong>. Nous allons voir qu&rsquo;il existe d&rsquo;autres ensembles de nombres qui eux ont un infini diff&eacute;rent.</p>
	        </div>


      
      
      
      
        <div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
      
    </div>
  </body>
</html>

