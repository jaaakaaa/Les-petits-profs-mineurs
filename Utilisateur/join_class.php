<?php

require_once "functions.php";

$id = $_GET['id'];

$id_classe = $_GET['id_classe'];

$result = queryRequest("UPDATE relation SET rang = 'eleve', id_classe = '$id_classe' WHERE id_utilisateur='$id'");

$result = queryRequest("SELECT pseudo FROM connexion NATURAL JOIN relation WHERE id_classe = '$id_classe' AND rang = 'professeur'");

$row = $result->fetch_array(MYSQLI_NUM);

$state = 1;
$msg = "Vous avez rejoins la classe de". $row[0];

$res = ['msg' => $msg, 'state' => $state];
echo json_encode($res);
?>