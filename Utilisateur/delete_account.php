<?php

require_once "functions.php";

$id = $_GET['id'];

$result = queryRequest("SELECT pseudo FROM connexion WHERE id_utilisateur='$id'");

$pseudo = $row[0];

$result = queryRequest("DELETE FROM connexion NATURAL JOIN relation NATURAL JOIN personnel WHERE id_utilisateur='$id'");

$state = 1;
$msg = "Vous avez supprimer le compte de ".$pseudo." la classe";

$res = ['msg' => $msg, 'state' => $state];
echo json_encode($res);

?>