<?php 

echo <<<_END
   <div id="header" style="
    display: inline-block;
    background: black;
    margin: 0px;
    width: 100%;
">
      <a id="ra" href="/Les-petits-profs-mineurs/index.php" style="
    float: left;
">Accueil</a>
      
      <a id="rc" href="/Les-petits-profs-mineurs/contact.php" style="
    float: left;
">Contact</a>
      <a id="rd" href="/Les-petits-profs-mineurs/apropos.php" style="
    float: left;
">A propos</a>
    
    
_END;
    require_once 'Utilisateur/header.php';

?>