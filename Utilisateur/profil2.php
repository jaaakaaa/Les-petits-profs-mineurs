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
    </head>
    
    <body>

  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

	<?php

	require_once "functions.php";

	$id = $_SESSION['id'];


//Joindre à la table "personnel"
	$result = queryRequest("SELECT * FROM connexion NATURAL JOIN personnel WHERE id_utilisateur='$id'");

	$row = $result->fetch_array(MYSQLI_NUM);

	$row[8] = date("d/m/Y", strtotime($row[8]));

// Gestion du Compte : Modification du Pseudo, Mdp, mail, Ajouter une photo de profil ... 
// Essayer de tout concentrer sur cette page (Menu caché)

echo <<<_END


	<table align = 'center'>
	<tr><td align = 'center'><B> Espace personnel </B></td></tr>

  <tr><td>
	<fieldset>
	<legend> Informations Personnelles </legend><br>
	<table>
     	<tr>
           <td>Nom :</td>
           <td>$row[4]</td>
       	</tr>
       	<tr>
           <td>Prénom :</td>
           <td>$row[5]</td>
       	</tr>
       	<tr>
           <td>Age :</td>
           <td>$row[6]</td>
       	</tr>
       	<tr>
           <td>Niveau Scolaire :</td>
           <td>$row[7]</td>
       	</tr>
       	<tr>
           <td>Anniversaire :</td>
           <td>$row[8]</td>
       	</tr>
	</table>
	</fieldset>
	</td></tr>
	<tr><td>
	<fieldset>
	<legend> Informations Compte </legend><br>
	<table>
       	<tr>
           <td>Pseudo :</td>
           <td>$row[1]</td>
       	</tr>
       	<tr>
           <td>e-Mail :</td>
           <td>$row[3]</td>
       	</tr>
       	<tr>
           <td>Mot de passe :</td>
           <td> </td>
       	</tr>
	</table>
	</fieldset>
	</td></tr>
	</table>
_END;


	$result->close();
	$conn->close();

	?>
	</div>
</body>
</html>