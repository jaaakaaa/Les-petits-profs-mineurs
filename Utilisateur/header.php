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

  	
      <a style="
    float: right;
" href="/Les-petits-profs-mineurs/Utilisateur/log_in.php">Se connecter</a>  

   
      <a style="
    float: right;
" href="/Les-petits-profs-mineurs/Utilisateur/sign_in.php">S'inscrire</a>  

</div>
_END;
}
else
{

// Revoir l'affichage du profil 
echo <<<_END

 
      <a style="
    float: right;
"href="/Les-petits-profs-mineurs/Utilisateur/log_out.php">Se déconnecter</a>  
   
   

      <a style="
    float: right;
" href="/Les-petits-profs-mineurs/Utilisateur/userspace.php"> $pseudo </a>  
  
  </div>

_END;
}


 ?> 