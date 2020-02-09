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
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
          <link rel="stylesheet" type="text/css" href="profil.css">  
        
        </head>

        
    <body>
    
    <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  $id = $_SESSION['id'];

  ?>

    <div id = 'main'>

    <?php require_once "menu_profil.php"; ?>
    
    <div id = 'contenu' style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

      <div class="container">
        <canvas id="Progress"></canvas>
      </div>

      <script>

        $.getScript("functions.js", function(){
          graph('Progress',<?php echo $id; ?>);  
        });

      </script> 


        

    </div>
  </div>
  </body>
</html>