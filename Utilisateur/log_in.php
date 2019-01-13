<!DOCTYPE html>
<html>
<head>
	<title> Page de connexion </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/Les-petits-profs-mineurs/style.css">
	<script type="application/javascript" src="/Les-petits-profs-mineurs/main.js">
    </script>
    <link rel="icon" href="/Les-petits-profs-mineurs/Images/mines_logo.ico">  
</head>
<body style="background: grey;">

 	<?php 

 	$dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/indexsub_header.php";
 	
 	require_once $dir;

 	?> 

	<div id="content" style="top: auto ; background: white;">

	<?php

		require_once 'functions.php';

		$error = $pseudo = $motdepasse = NULL;

		if (isset($_POST['envoyer']))
		{
			$pseudo = fix_string($_POST['pseudo']);
		    $motdepasse = fix_string($_POST['motdepasse']);
		    $jeton = salage($motdepasse);

		    if ($pseudo == "" || $motdepasse == "")
		        $error = "Tous les champs ne sont pas remplis<br>";
		    else
		    {
		    	$result = queryRequest("SELECT * FROM connexion WHERE pseudo='$pseudo' AND motdepasse='$jeton'");

		    	if ($result->num_rows == 0)
		    	{
		        	$error = "Utilisateur ou mot de passe invalide<br>";
		    	}
		    	else
		    	{
		    		$row = $result->fetch_array(MYSQLI_NUM);
		        	$_SESSION['id'] = $row[0];
		        	$_SESSION['pseudo'] = $row[1];
		    		echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
		    	}
			}
		}

		$conn->close();


echo <<<_END
	<br>

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

	<form action="log_in.php" method="post">
	<table align = 'center'>
    <tr> <td colspan = 2>
    <fieldset>
	<legend> Connexion </legend><br>
	<table>
     	<tr>
           <td>Pseudo :</td>
           <td>	<input type="text" name="pseudo" placeholder="Votre pseudo" maxlength="20"></td>
       	</tr>
       	<tr>
           <td>Mot de passe :</td>
           <td>	<input type="password" name="motdepasse" placeholder="Votre mot de passe" maxlength="20"></td>
       	</tr>
       	<tr><td colspan = 2><span><font color=red size=1><i>$error</i></span></p></td></tr>
	</table>
	</fieldset>
	</td> </tr>
	<tr><td><br></td></tr>
	<tr> 
		<td align = 'right'><input type="hidden" name="envoyer" value="yes">
			<input type="submit" value="Envoyer"></td>
		<td align = 'left'><input type="hidden" name="annuler" value="yes">
			<input type="reset" value="Annuler"></td>
	</table>
	</form>
_END;

	//Se souvenir de moi -> Cookie => Pop Up "Accepté vous les cookies"

?>

	</div>

</body>
</html>