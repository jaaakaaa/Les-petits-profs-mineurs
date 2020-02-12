<?php 

	require_once "indexsub_header.php";

echo <<<_END

    <nav> <! attention aux href>
      <ul>
        <a href="/Les-petits-profs-mineurs/menu.php" style="
    display: inherit;
    position: absolute;
    padding: 20px 0px 0px 30px;
    color: white;"
>Menu</a>
        <li class="menu-maths"><a href="/Les-petits-profs-mineurs/Maths/menuMaths.php">Les Mathématiques</a>
          <ul class="submenu">
            <li style="color:white">Les Esembles et l'infini</li>
            <li>    
                <ul>
                    <li><a href="/Les-petits-profs-mineurs/Maths/partieun.php">Les ensembles</a></li>
                	<li><a href="/Les-petits-profs-mineurs/Maths/partiequatre.php">L'infini</a></li>
                	<li><a href="/Les-petits-profs-mineurs/Maths/partiecinq.php">L'ensemble Z</a></li>
                	<li><a href="/Les-petits-profs-mineurs/Maths/partiesix.php">L'ensemble Q</a></li>
           		</ul>
           	</li>
            <li style="color:white">Les Fonctions et Réprésentation graphique</li>
            <li>
                <ul>
                    <li><a href="/Les-petits-profs-mineurs/Maths/partiedeux.php">Les fonctions</a></li>
                    <li><a href="/Les-petits-profs-mineurs/Maths/partietrois.php">La représentation d'une fonction</a></li>
                    <li><a href="/Les-petits-profs-mineurs/Maths/partiesept.php">La trompette de Gabriel</a></li>
                </ul>
            </li>
          </ul>
        </li>
        <li class="menu-matiere"><a href="/Les-petits-profs-mineurs/Matiere/menuMatiere.php">La Matière</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Matiere/partieun.php">Qu'est-ce que la matière ?</a></li>
            <li><a href="/Les-petits-profs-mineurs/Matiere/partiedeux.php">Les états de la matière</a></li>
          </ul>
        </li>
        <li class="menu-lumiere"><a href="/Les-petits-profs-mineurs/Lumiere/menuLumiere.php">L'Optique</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partieun.php">La propagration de la lumière</a></li>
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partiedeux.php">La composition des couleurs</a></li>
            <li><a href="/Les-petits-profs-mineurs/Lumiere/partietrois.php">Illusions d'optiques</a></li>
          </ul>
        </li>
        <li class="menu-energie"><a href="/Les-petits-profs-mineurs/Energie/menuEnergie.php">L'énergie</a>
          <ul class="submenu">
	    <li><a href="/Les-petits-profs-mineurs/Energie/partieun.php">Sources d'énergie</a></li>
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
            <li><a href="/Les-petits-profs-mineurs/Univers/taillereelle.php">La vraie taille des choses</a></li>
          </ul>
        </li>
	<li class="menu-experience"><a href="/Les-petits-profs-mineurs/Experience/menuExperience.php">Expériences</a>
          <ul class="submenu">
            <li><a href="/Les-petits-profs-mineurs/Experience/partieun.php">L'oeuf mou</a></li>
            <li><a href="/Les-petits-profs-mineurs/Experience/partiedeux.php">La condensation</a></li>
            <li><a href="/Les-petits-profs-mineurs/Experience/partietrois.php">La pression de l'eau</a></li>
          </ul>
        </li>
      </ul>
    </nav>

_END;

?>