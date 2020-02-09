<?php

require_once "functions.php";

$id = $_GET['id'];

$result = queryRequest("SELECT id_classe FROM relation WHERE id_utilisateur='$id'");

$row = $result->fetch_array(MYSQLI_NUM);

$id_classe = $row[0];

$result = queryRequest("SELECT id_utilisateur FROM relation WHERE id_classe='$id_classe'");

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j)
{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	$temp_result = queryRequest("UPDATE relation SET rang = 'argonaute', id_classe = '0' WHERE id_utilisateur = '$row[0]'");
}

$state = 1;
$msg = "Vous avez dissout la classe";

$res = ['msg' => $msg, 'state' => $state];
echo json_encode($res);

?>