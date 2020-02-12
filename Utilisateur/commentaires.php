<?php

session_start();

if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://www.mineurs.5gbfree.com/Les-petits-profs-mineurs/Utilisateur/log_in.php");
}
?>

<!DOCTYPE html>
<html>
    
  <head>
    <?php require_once $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/head.php"; ?>
    
    <link rel="stylesheet" type="text/css" href="profil.css">


  </head>
    
    <body>

  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>

  <div id = 'main'>

    <?php require_once "menu_profil.php" ?>

    <div id = 'contenu' style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
<pre style="word-break: normal;">
<?php
    $myfilename = "commentaires.txt";
      echo file_get_contents("../Stats/".$myfilename);
?>
</pre>
	</div>
  </div>
</body>
</html>