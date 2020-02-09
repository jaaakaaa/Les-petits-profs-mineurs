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

  <?php

    $pseudo = $fail = $error = NULL;

    require_once 'functions.php';

    if (isset($_POST['pseudo']))
      $pseudo = fix_string($_POST['pseudo']);


    if (isset($_POST['envoyer']) && !empty($_POST['envoyer']))
    {
      $error = "Votre formulaire comporte les erreurs suivantes :";
      $fail .= validate_pseudo($pseudo);

      if ($fail == "")
      {
      	$id = $_SESSION['id'];
        $result = queryRequest("UPDATE connexion SET pseudo='$pseudo' WHERE id_utilisateur='$id'");

        $_SESSION['pseudo'] = $pseudo;
        echo "<script type='text/javascript'>document.location.replace('userspace.php');</script>";

       }

    }


    $conn->close();


echo <<<_END

  <script src=functions.js></script>

  <style>
    input, textarea, select, option {
    background-color:#FFFFFF;
    }
    input, textarea, select {
    padding:3px;
    border:1px solid #C9C9C9;
    border-radius:10px;
    box-shadow:1px 1px 1px #C9C9C9 inset;
    }

    input[type=radio] {
    box-shadow:none;
    width:15px;
    height:15px; 
    cursor:pointer;
    }

    input[type=submit] {
    width:100px;
    box-shadow:1px 1px 1px #C9C9C9;
    cursor:pointer;
    }

    input[type=reset] {
    width:100px;
    box-shadow:1px 1px 1px #C9C9C9;
    cursor:pointer;
    }
  </style>

  <br>

  <form action="profil_modif_pseudo.php" method="post">
  <table align = 'center'>
  <tr><td align = 'center' colspan = 2><B> Changement de pseudo </B></td></tr>
  <tr><td colspan = 2>
  $error
  <p><font color=red size=1><i>$fail</i></font></p>
  </td></tr>
  <tr> <td colspan = 2>
  <fieldset>
  <legend> Choix du nouveau pseudo </legend><br>
  <table>
      <tr>
           <td>Pseudo :</td>
           <td> <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" maxlength="20" onBlur=checkpsd(this) value=$pseudo></td>
           <td><span id=psd></span></td>
        </tr>
  </table>
  </fieldset>
  </td></tr>
  <tr><td><br></td></tr>
  <tr>
    <td align = 'right'><input type="hidden" name="envoyer" value="yes">
      <input type="submit" value="Envoyer"></td>
    <td align = 'left'><input type="hidden" name="annuler" value="yes">
      <input type="reset" value="Annuler"></td>
  </tr>
  </table>

  </form>

_END;

?>

	</div>
  </div>
</body>
</html>