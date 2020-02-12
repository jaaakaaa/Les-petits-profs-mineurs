<?php
// Start the session
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

		$pseudo = $motdepasse = $c_mdp = $mail = $nom = $prenom = $anniversaire = $age = $scolaire = $fail = $error = NULL;

		require_once 'functions.php';

		if (isset($_POST['pseudo']))
			$pseudo = fix_string($_POST['pseudo']);

		if (isset($_POST['motdepasse']))
			$motdepasse = fix_string($_POST['motdepasse']);

		if (isset($_POST['c_mdp']))
			$c_mdp = fix_string($_POST['c_mdp']);

		if (isset($_POST['mail']))
			$mail = fix_string($_POST['mail']);

		if (isset($_POST['nom']))
			$nom = fixe_nom(fix_string($_POST['nom']));

		if (isset($_POST['prenom']))
			$prenom = fixe_nom(fix_string($_POST['prenom']));


		if (isset($_POST['anniversaire']))
			$anniversaire = $_POST['anniversaire'];


		if (isset($_POST['scolaire']))
			$scolaire = fix_string($_POST['scolaire']);

		if (isset($_POST['envoyer']) && !empty($_POST['envoyer']))
		{
			$error = "Votre formulaire comporte les erreurs suivantes :";
			$fail = validate_forename($prenom);
			$fail .= validate_surname($nom);
			$fail .= validate_pseudo($pseudo);
			$fail .= validate_mail($mail);
			$fail .= validate_password($motdepasse,$c_mdp);

			if (isset($_POST['auth']))	
				$auth = TRUE;
			else $auth = FALSE;

			if ($fail == "")
			{
			 	$age = age($anniversaire);
			 	$date_insc = date('o-m-d');
			 	$jeton = salage($motdepasse);

			 	$result = queryRequest("LOCK TABLES users.connexion WRITE");

			 	$result = queryRequest("INSERT INTO connexion VALUES (0,'$pseudo','$jeton','$mail','$auth')");

			 	$insertID = $conn->insert_id;

			 	$result = queryRequest("UNLOCK TABLES");

			 	$result = queryRequest("INSERT INTO personnel VALUES ($insertID,'$nom','$prenom','$age','$scolaire','$anniversaire','$date_insc')");
			
			 	$result = queryRequest("INSERT INTO relation VALUES ($insertID,'argonaute',0)");

			 	$quizz = array('quizzMatiere','quizzOptique','quizzEnergie','quizzSVT','quizzEspace','quizzMaths');

			 	for ($j = 0; $j < count($quizz); ++$j)
			 	{
			 		$result = queryRequest("INSERT INTO $quizz[$j] VALUES ($insertID,0,0,0,0,0)");
			 	}

			 		    $_SESSION['id'] = $insertID;
			 		    $_SESSION['pseudo'] = $pseudo;
			 	    	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";

			 }

		}

		//bouton annuler => refresh la page 


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

	<form action="sign_in.php" method="post">
	<table align = 'center'>
	<tr><td align = 'center' colspan = 2><B> Formulaire d'inscription </B></td></tr>
	<tr><td colspan = 2>
	$error
	<p><font color=red size=1><i>$fail</i></font></p>
	</td></tr>
	<tr> <td colspan = 2>
	<fieldset>
	<legend> Informations Personnelles </legend><br>
	<table>
     	<tr>
           <td>Nom :</td>
           <td>	<input type="text" name="nom" placeholder="Votre nom" maxlength="20" autofocus='autofocus' value=$nom></td>
       	</tr>
       	<tr>
           <td>Prénom :</td>
           <td>	<input type="text" name="prenom" placeholder="Votre prénom" maxlength="20" value=$prenom></td>
       	</tr>
       	<tr>
           <td>Anniversaire :</td>
           <td>	<input type="date" name="anniversaire" min="1980-01-01" max="2059-12-31" value=$anniversaire></td>
       	</tr>
       	<tr>
           <td rowspan = 6>Niveau Scolaire :</td>
           <td>	<input type="radio" name="scolaire" value="inf"> Inférieur </td>
       	</tr>
       	<tr>
           <td>	<input type="radio" name="scolaire" value="CM1"> CM1 </td>
       	</tr>
       	<tr>
           <td>	<input type="radio" name="scolaire" value="CM2"> CM2 </td>
       	</tr>
       	<tr>
           <td>	<input type="radio" name="scolaire" value="6eme"> 6ème </td>
       	</tr>
       	<tr>
           <td>	<input type="radio" name="scolaire" value="5eme"> 5ème </td>
       	</tr>
       	<tr>
           <td>	<input type="radio" name="scolaire" value="sup"> Supérieur </td>
       	</tr>
	</table>
	</fieldset>

	<fieldset>
	<legend> Informations de Compte </legend><br>
	<table>
     	<tr>
           <td>Pseudo :</td>
           <td>	<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" maxlength="20" onBlur=checkpsd(this) value=$pseudo></td>
           <td><span id=psd></span></td>
       	</tr>
       	<tr>
           <td>e-mail :</td>
           <td>	<input type="mail" name="mail" id="mail" placeholder="Votre e-mail" maxlength="100" onBlur=checkml(this) value=$mail></td>
           <td><span id=ml></span></td>
       	</tr>
       	<tr>
           <td>Mot de passe :</td>
           <td>	<input type="password" name="motdepasse" id="mdp1" placeholder="Votre mot de passe" maxlength="20" value=$motdepasse></td>
           <td> </td>
       	</tr>
       	<tr>
           <td>Confirmation Mot de passe :</td>
           <td>	<input type="password" name="c_mdp" id="mdp2" placeholder="Votre mot de passe" maxlength="20" onBlur=checkpass() value=$c_mdp></td>
           <td><span id=alerte_mdp></span></td>
        </tr>
        <tr></tr>
        <tr>
        	<td colspan = 2><input type="checkbox" id="auth" name="auth" value = TRUE checked>
  			<label for="auth">J'autorise le traitement de mes données personnelles</label></td>
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
	<br><br><br><br><br><br>
	</div>

</body>
</html>