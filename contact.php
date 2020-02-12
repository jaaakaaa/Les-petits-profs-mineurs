<?php

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
      

<?php
// Start the session
session_start();

        
    $nom = $com = NULL;
    $commmentaires = fopen('Stats/commentaires.txt', 'a');
    if (isset($_POST['com']) and $_POST['com']!="") {
         $nom = $_POST['nom'];
         
     if ($nom==""){
        $nom='#Anonyme#';
    } else {
        $nom = $_POST['nom'];
    
        
        
    }
    
		
    $com = $_POST['com'];
        
    
    $date = date("d,M,Y h:i:s A");
    fputs($commmentaires, $nom."     ".$date."\n\n".$com);
    fputs($commmentaires, "\n____________________________________________________________\n\n");
    
    fclose($commmentaires);
    echo 'Merci ! Votre commentaire à bien était pris en compte.';
    } else {

    }
    
   
    $nom = NULL;
    $_POST['com'] = "";
     
echo <<<_END


    <h1> Commentaires / Suggestions </h1>
    <br>
    <div id="text"><p>    Utilisez ce formulaire pour nous laisser des commentaires sur le fond et la forme de ce site internet.
Vous pouvez également suggerer des pistes d'améliorations.</p></div>
    <form id="form" action="contact.php" method="post" accept-charset="UTF-8">
    <br>
    <input type="text" name="nom" placeholder="Nom / Pseudo" maxlength="20">
    <br>
    <br>
    <textarea type="text" name="com" placeholder="Commentaire (1000 caractères max)" maxlength="1000" style="height:150px;width:100%;font-family:Arial;" ></textarea>
    <br>
    <br>
    <input type="submit" value="Envoyer"/>
    </form>   
      
      
      
      
    </div>
  </body>
</html>
    
_END;
   
?>