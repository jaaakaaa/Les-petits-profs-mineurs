<?php

	require_once 'functions.php';

	$color = 'red';
	$msg = "";
 	
 	if (isset($_POST['mail']))
 	{
		$mail =fix_string($_POST['mail']);

		if (filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
			$result = queryRequest("SELECT * FROM connexion WHERE mail = '$mail'");
			
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
		else 
		{
			$msg = "&nbsp;&#x2718;";
		}
	$res = ['msg' => $msg, 'color' => $color];
	echo json_encode($res);
 	}


?>