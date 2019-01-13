<?php

	require_once 'functions.php';

	$color = 'red';
	$msg = "";
 	
 	if (isset($_POST['pseudo']))
 	{
		$pseudo = fix_string($_POST['pseudo']);

		$result = queryRequest("SELECT * FROM connexion WHERE pseudo = '$pseudo'");

		if ($result->num_rows)
		{
			$msg = "&nbsp;&#x2718;";
		}
		else
		{
			$msg = "&nbsp;&#x2714;";
			$color = "green";
		}

 	}

 	$res = ['msg' => $msg, 'color' => $color];
	echo json_encode($res);
 	

?>