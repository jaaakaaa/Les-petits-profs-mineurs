<?php

require_once "functions.php";

$id = $_GET['id'];

$id_classe = rand(10000000,99999999);

$i = 0;

$result = queryRequest("SELECT * FROM relation WHERE id_classe='$id_classe'");

$row = $result->fetch_array(MYSQLI_NUM);

while ($i <= 100 && $row != "")
{
  $id_classe = rand(10000000,99999999);

  $i++;

  $result = queryRequest("SELECT * FROM relation WHERE id_classe='$id_classe'");

  $row = $result->fetch_array(MYSQLI_NUM);
}

if ($row != "")
{
  $state = 0;
  $msg = "Une erreur est survenue lors de la création de la classe. Veuillez réessayer.";
}
else
{
  $result = queryRequest("UPDATE relation SET rang = 'professeur', id_classe = '$id_classe' WHERE id_utilisateur='$id'");
  $state = 1;
  $msg = "Vous avez crée une classe";
}

$res = ['msg' => $msg, 'state' => $state];
echo json_encode($res);
?>