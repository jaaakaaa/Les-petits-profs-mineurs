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

  ?>

    <div id = 'main'>

    <?php require_once "menu_profil.php"; ?>
    
    <div id = 'contenu' style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

      <h2 align = 'center'><B> Espace Professeur </B></h2>

      <div class="container">

        <?php

          $id = $_SESSION['id'];

          $result = queryRequest("SELECT id_classe  FROM relation WHERE id_utilisateur = $id");

          $row = $result->fetch_array(MYSQLI_NUM);

          $id_classe = $row[0];

          $result = queryRequest("SELECT pseudo, prenom, id_utilisateur FROM connexion NATURAL JOIN personnel NATURAL JOIN relation WHERE id_classe = $id_classe");

          $rows = $result->num_rows;

          if ($rows > 1)
          {          
            for ($j = 0; $j < $rows; ++$j)
            {
              $result->data_seek($j);
              $row = $result->fetch_array(MYSQLI_NUM);

              if ($row[2] != $id)
              {
                $pres_student = "Pseudo : ".$row[0].", Prenom : ".$row[1];
echo <<<_END
<h3 style='text-align:center;'>$pres_student</h3>
<a onclick='afficher("spoiler$j")' style='border-radius:5px;display:block;background:gray;color:white;text-align:center;text-decoration:none;' href='#'><pr> Voir la progression </pr></a>
<div style='display:none' id='spoiler$j'><canvas id='Progress$j'></canvas></div>
_END;
              }
            }
          }
          else
          {
            echo "<h3 style='text-align:center;'>Vous n'avez aucun élève ... </h3>";
          }
          ?>
          <script>
            function afficher(id)
            {
              if(document.getElementById(id).style.display=='none')
              {
                document.getElementById(id).style.display='';
              }
              else
              {
                document.getElementById(id).style.display='none' ;
              }
            }

            $.getScript("functions.js", function(){
             <?php
              if ($rows > 1)
              {
               for ($k = 0; $k < $rows; ++$k)
               {
                 $result->data_seek($k);
                 $row = $result->fetch_array(MYSQLI_NUM);
                 echo "graph('Progress".$k."',".$row[2].");";
               }  
              }
             ?>

          });

        </script>


      </div>
    </div>
  </div>
  </body>
</html>