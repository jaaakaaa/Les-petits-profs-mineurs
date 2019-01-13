 <?php 

session_start();


require_once 'setup.php';


if (isset($_SESSION['pseudo']))
{
	$pseudo = $_SESSION['pseudo'];
	$loggedin = TRUE ;
}
else $loggedin = FALSE ;

if ($loggedin == FALSE)
{
echo <<<_END

  	<div id="login-area">
      <a href="/Les-petits-profs-mineurs/Utilisateur/log_in.php">Se connecter</a>  
    </div>
   
    <div id="signin-area">
      <a href="/Les-petits-profs-mineurs/Utilisateur/sign_in.php">S'inscrire</a>  
    </div>

_END;
}
else
{

// Revoir l'affichage du profil 
echo <<<_END

  	<div id="login-area">
      <a href="/Les-petits-profs-mineurs/Utilisateur/log_out.php">Se déconnecter</a>  
    </div>
   
    <div id="signin-area">
      <a href="/Les-petits-profs-mineurs/Utilisateur/profil.php"> $pseudo </a>  
    </div>

_END;
}


 ?> 