<?php

require_once "functions.php";

$id = $_GET['id'];

$result = queryRequest("UPDATE relation SET rang = 'argonaute', id_classe = '0' WHERE id_utilisateur='$id'");

$state = 1;
$msg = "Vous avez quitté la classe";

$res = ['msg' => $msg, 'state' => $state];
echo json_encode($res);
?>