<?php 

	//Connection à la base de données

	require_once 'login.php';

	$conn = new mysqli($hostnetwork,$username,$password,$database);
		if ($conn->connect_error) die($conn->connect_error);

	$query = "SET NAMES utf8";
	$result = $conn->query($query);
		if (!$result) die($conn->error);


	function queryRequest($query)
  	{
    	global $conn;
    	$result = $conn->query($query);
    	if (!$result) die($conn->error);
    	return $result;
	}

	function fix_string($string)
	{
		global $conn;
		$string = strip_tags($string);
		$string = htmlentities($string);
		$string = stripcslashes($string);
		$string = $conn->real_escape_string($string);
		$string = preg_replace('/\//', '', $string);
		return $string;
	}

	function fixe_nom($nom)
	{
		return ucfirst(strtolower($nom));
	}

	function age($date)
	{
 		return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
	}

	function salage($motdepasse)
	{
		$sel1 = 'h$g!&' ;
		$sel2 = 'fp*d:' ;
		return hash('ripemd128', "$sel1$motdepasse$sel2") ;
	}



	//Fonctions de validation de formulaire

	function validate_forename($field)
	{
		return ($field == "") ? "Aucun prénom entré.<br>": "";
	}
	  
	function validate_surname($field)
	{
		return($field == "") ? "Aucun nom de famille entré.<br>" : "";
	}
	  
	function validate_pseudo($field)
	{
		$result = queryRequest("SELECT * FROM connexion WHERE pseudo = '$field'");

	    if ($field == "") return "Aucun pseudo entré.<br>";
	    else if ($result->num_rows != 0)
	    	return "Ce pseudo est déjà utilisé.<br>";
	    else if (strlen($field) < 5)
	    	return "Le pseudo doit contenir au moins 5 caractères.<br>";
	    else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
	    	return "Seuls caractères permis dans le pseudo : a-z, A-Z, 0-9, - et _.<br>";
	    return "";
	}
	  
	function validate_password($field1,$field2)
	{
	    if ($field1 == "") return "Aucun mot de passe entré.<br>";
	    else if (strlen($field1) < 6)
	    	return "Le mot de passe doit contenir au moins 6 caractères.<br>";
	    else if (!preg_match("/[a-z]/", $field1) ||
	            !preg_match("/[A-Z]/", $field1) ||
	            !preg_match("/[0-9]/", $field1))
	    	return "Le mot de passe doit contenir au moins un a-z, A-Z et 0-9.<br>";
	    else if ($field1 != $field2)
	    	return "Le mot de passe a mal été confirmé.<br>";
	    return "";
	}
	  
	function validate_mail($field)
	{
		$result = queryRequest("SELECT * FROM connexion WHERE mail = '$field'");

	    if ($field == "") return "Aucune adresse e-mail entrée.<br>";
	    else if (!($result->num_rows == 0 && filter_var($field, FILTER_VALIDATE_EMAIL)))
	    	return "Cette adresse mail est déjà utilisée.<br>";
	    else if (!((strpos($field, ".") > 0) && (strpos($field, "@") > 0)) ||
	    		preg_match("/[^a-zA-Z0-9.@_-]/", $field))
	        return "L'adresse mail n'est pas valable.<br>";
	    return "";
	}

?>