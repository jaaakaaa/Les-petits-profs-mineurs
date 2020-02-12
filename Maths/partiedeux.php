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
      
          <h1 style="color:#050980;">Les fonctions</h1>

		      <h2 style="color:[REMPLACER PAR UNE COULEUR];"> </h2>

		      <div id="texte">
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En cours de math&eacute;matiques, ton ma&icirc;tre ou ta ma&icirc;tresse t&rsquo;a appris qu&rsquo;il existait des nombres&nbsp;: un (1) deux (2), dix (10), cinquante milliards trois cent cinquante-deux mille vingt-cinq (50&nbsp;000&nbsp;352&nbsp;025), &hellip; .</p>
<p>Mais &agrave; quoi &ccedil;a sert&nbsp;?</p>
<p>Je t&rsquo;ai d&eacute;j&agrave; expliqu&eacute; dans une autre histoire qu&rsquo;une des choses qu&rsquo;on aime faire en math&eacute;matiques, c&rsquo;est ranger les nombres dans des ensembles, et qu&rsquo;on peut faire des choses tr&egrave;s marrantes avec ces ensembles.</p>
<p>Une autre chose qu&rsquo;on aime faire avec les nombres, c&rsquo;est les transformer.</p>
<p>Pour t&rsquo;expliquer &ccedil;a, je vais te donner un exemple (une analogie).</p>
<p>Le pain que tu manges chez toi, tes parents l&rsquo;ont achet&eacute; &agrave; une boulangerie. Cette boulangerie dispose de farine, de levure, d&rsquo;eau et de sel, et elle va <strong>transformer</strong> ces aliments en pain, en effectuant diverses op&eacute;rations (m&eacute;langer les ingr&eacute;dients, la cuisson&hellip;).</p>

<!-- Insérer une image -->
	    <div align="center"> <img src="Images/boulangerie.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>

<p>Eh bien, en math&eacute;matiques, c&rsquo;est pareil&nbsp;! On peut cr&eacute;er des objets qui servent &agrave; transformer les nombres, en d&rsquo;autres choses&nbsp;(en g&eacute;n&eacute;ral en d&rsquo;autres nombres). Ces objets s&rsquo;appellent des <strong>fonctions</strong>.</p>

<div align="center"> <img src="Images/fonction.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>

<p>En g&eacute;n&eacute;ral, on note les fonctions "f".</p>
<p>Par exemple je peux d&eacute;finir la fonction qui est &laquo;&nbsp;addition avec 3&nbsp;&raquo;, et l'appeler f.</p>
<p>Cela signifie que si je prends un nombre au hasard, par exemple 7, alors f va <strong>transformer</strong> 7 en 10, parce que 7 + 3 = 10. Si je prends le nombre 2, alors f va transformer 2 en 5, parce que 2 + 3 = 5. <strong>La fonction f additionne 3 &agrave; tous les nombres qu&rsquo;on lui donne</strong>. Ainsi, contrairement &agrave; la boulangerie, f ne fabrique pas du pain, mais des nombres&hellip;</p>
<p>On utilise certaines notations pour parler de ces transformations de nombre.</p>
<p>Je vais par exemple noter&nbsp;: f(7) = 10, ou f(2) = 5. Les parenth&egrave;ses ( ) apr&egrave;s le f signifient que je &laquo;&nbsp;donne&nbsp;&raquo; 7 &agrave; la fonction f, donc que je veux transformer 7 gr&acirc;ce &agrave; f. Et puisque je lui additionne 3, j&rsquo;obtiens donc 7+3=10. Donc f(7) = 10. C&rsquo;est la m&ecirc;me chose avec f(2) = 5.</p>
<p>Ici, j&rsquo;ai consid&eacute;r&eacute; deux exemples de transformations&nbsp;; la transformation de 7 et celle de 2. Ce sont deux exemples <strong>particuliers</strong>. Or, une autre chose qu&rsquo;on aime bien faire en math&eacute;matiques, c&rsquo;est parler de <strong>g&eacute;n&eacute;ralit&eacute;s, </strong>c&rsquo;est-&agrave;-dire pouvoir d&eacute;crire les transformations, pas seulement pour des exemples particuliers, mais pour n&rsquo;importe quel nombre.</p>
<p>Peut-&ecirc;tre que je m&rsquo;en fiche de comment 2 ou 7 vont &ecirc;tre transform&eacute;s : moi ce que j&rsquo;aimerais savoir, c&rsquo;est comment un nombre au hasard, que l&rsquo;on note "x" par exemple, sera transform&eacute;.</p>
<p>Je prends donc un nombre que je note x.<br />x est un nombre, donc il vaut peut-&ecirc;tre 2, peut-&ecirc;tre 7, peut-&ecirc;tre 100, peut-&ecirc;tre 45&nbsp;000&hellip; je n&rsquo;en sais rien&nbsp;; je sais juste que c&rsquo;est un nombre, je n&rsquo;ai pas besoin de savoir ce qu&rsquo;il vaut r&eacute;ellement.</p>
<p>Je sais que f peut transformer les nombres&nbsp;; donc f peut, en particulier, transformer x. f va transformer x en x + 3. Puisque f additionne 3 &agrave; n&rsquo;importe quel nombre, donc elle le fait &agrave; x aussi.</p>
<p>Ainsi, je note&nbsp;: f(x) = x + 3.</p>
<p>Si jamais on d&eacute;cide que x vaut 7, alors il suffit de mettre 7 &agrave; la place de chaque x dans l'&eacute;galit&eacute;. Ainsi, f(x) = x + 3 devient f(7) = 7 + 3 =&nbsp; 10. On a donc, <strong>si x vaut 7</strong>, f(x) = 10.</p>
<p>&nbsp;</p>
<p>Le fait d&rsquo;utiliser la notation "x" permet de parler d&rsquo;un nombre <strong>en g&eacute;n&eacute;ral</strong>, et pas d&rsquo;un exemple particulier comme 7 ou 2. La seule fa&ccedil;on que j&rsquo;ai de noter f(x) c&rsquo;est "x+3", alors que f(7) je peux le noter 7+3 ou 10, qui est sa vraie valeur.</p>
<p>"f(x)" permet de noter la transformation &laquo; additionner 3 &raquo; pour n&rsquo;importe quel nombre. Puis dans l&rsquo;expression &laquo; f(x) = x + 3 &raquo;, si j&rsquo;ai envie de conna&icirc;tre la transformation d&rsquo;un nombre en particulier, par exemple 8, alors je n&rsquo;aurais qu&rsquo;&agrave; <u>remplacer tous les "x" par "8"</u>&nbsp;dans l&rsquo;expression de f(x), et ensuite de <u>calculer</u>.</p>
<p>F(x) = x + 3 ; donc si je remplace tous les x par 8, j&rsquo;ai f(8) = 8 + 3, donc f(8) = 11. Donc f transforme 8 en 11. J&rsquo;ai donc d&eacute;crit la transformation de tous les nombres par f, en &eacute;crivant "f(x) = x + 3".</p>

<a onclick="spoiler('spoiler1')" style="border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;width: 100%;" href="#rien"><pr> En savoir plus </pr></a>
<div id="spoiler1" style="border-radius:5px;border: 2px solid gray; display: none; padding: 15px;margin:0px;">
   Attention, à partir d'ici les petits étoiles "*" désigne le signe "multiplication". Par exemple : 2*4 = 2 multiplier par 4 = 8. On fait cela pour ne pas confondre la multiplication (*) avec la lettre x.<br>
Il existe une meilleure notation pour f. On sait que f transforme des nombres. Dans l&rsquo;article sur les ensembles, je t&rsquo;ai expliqu&eacute; que tous les nombres que tu connais &eacute;taient rang&eacute;s dans un ensemble qui s&rsquo;appelait <span style="font-family: 'Cambria Math',serif;">ℕ</span>. Or, si je prends un nombre au hasard, et que je lui ajoute 3, alors le r&eacute;sultat obtenu est toujours un nombre. Donc f prend un nombre et renvoie un autre nombre. Je peux r&eacute;sumer &ccedil;a avec la notation suivante&nbsp;:</p>

<div align="center"> <img src="Images/f(x)=x+3.png" alt='Texte alternatif à afficher si ça ne charge pas'> </div>

<p>Ce que veut dire cette notation, c'est d'abord que la fonction s'appelle f, puis qu'elle prend un nombre x dans l'ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span>, et qu'elle le remet dans l'ensemble <span style="font-family: 'Cambria Math',serif;">ℕ</span> en le transformant gr&acirc;ce au calcul "x + 3".</p>
<p>On peut maintenant d&eacute;finir plein d&rsquo;autres fonctions.</p>
<p>Par exemple la fonction "g" qui &agrave; un nombre x associe le nombre "2*x" (2 fois x), ou encore la fonction h qui va transformer un nombre x en "3*x &ndash; 5".</p>
<p>On peut chercher &agrave; calculer la transformation de 7, par exemple. On remplace donc tous les x par 7 et on calcule. On a alors&nbsp;:</p>
<p>g(7) = 2*7 = 14.</p>
<p>h(7) = 3*7 &ndash; 5 = 21 &ndash; 5 = 16.</p>
</div>

	        </div>

      
        <div id="quiz" align=center></div>
        <script type="text/javascript" src="/Les-petits-profs-mineurs/js/Modele-de-quiz.js"></script>
        <script> window.onload = Suivant() </script>
      
    </div>
  </body>
</html>
