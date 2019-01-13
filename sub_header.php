<?php 

	require_once "indexsub_header.php";

echo <<<_END

    <nav> <! attention aux href>
      <ul>
        <li class="menu-matiere"><a href="/Les-petits-profs-mineurs/Matiere/menuMatiere.php">La Matière</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Matiere/partieun.php">Les états de la matière</a></li>
            <li><a href="/Les-petits-profs-mineurs/Matiere/partiedeux.php">Changements d'état</a></li>
            <li><a href="/Les-petits-profs-mineurs/Matiere/partietrois.php">Mélanges de liquides</a></li>
            <li><a href="/Les-petits-profs-mineurs/Matiere/partiequatre.php">Précipitation et dissolution</a></li>
          </ul>
        </li>
        <li class="menu-lumiere"><a href="/Les-petits-profs-mineurs/Lumiere/menuLumiere.php">L'Optique</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partieun.php">La propagration de la lumière</a></li>
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partiedeux.php">La composition des couleurs</a></li>
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partietrois.php">Illusions d'optiques</a></li>
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partiequatre.php">la perception des images</a></li>
          </ul>
        </li>
        <li class="menu-energie"><a href="/Les-petits-profs-mineurs/Energie/menuEnergie.php">L'énergie</a>
          <ul class="submenu">
	    <li><a href="/Les-petits-profs-mineurs/Energie/partieun.php">Sources d'énergie</a></li>
            <li><a href="/Les-petits-profs-mineurs/Energie/partiedeux.php">(idée) qu'est-ce que l'énergie ?</a></li>
          </ul>
        </li>
        <li class="menu-SVT"><a href="/Les-petits-profs-mineurs/SVT/menuSVT.php">SVT</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/SVT/partieun.php">La biodiversité</a></li>
            <li><a href="/Les-petits-profs-mineurs/SVT/partiedeux.php">Le fonctionnement du vivant : Les animaux</a></li>
            <li><a href="/Les-petits-profs-mineurs/SVT/partietrois.php">Les roches</a></li>
          </ul>
        </li>
        <li class="menu-univers"><a href="/Les-petits-profs-mineurs/Univers/menuUnivers.php">Vers l'Infini et au delà</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Univers/partieun.php">Voyage dans l'Univers</a></li>
            <li><a href="/Les-petits-profs-mineurs/Univers/partiedeux.php">Le Système solaire</a></li>
            <li><a href="/Les-petits-profs-mineurs/Univers/partietrois.php">La vitesse de la lumière</a></li>
            <li><a href="/Les-petits-profs-mineurs/Univers/partiequatre.php">Questions pour un astronaute</a></li>
          </ul>
        </li>
	<li class="menu-experience"><a href="/Les-petits-profs-mineurs/Experience/menuExperience.php">/!\ Expériences /!\</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Experience/oeufmou.html">L'oeuf mou</a></li>
            <li><a href="/Les-petits-profs-mineurs/Experience/condensation.html">La condensation</a></li>
            <li><a href="/Les-petits-profs-mineurs/Experience/pression_eau.html">La pression de l'eau</a></li>
          </ul>
        </li>
      </ul>
    </nav>

_END;

?>