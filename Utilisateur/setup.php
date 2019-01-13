<?php 

require_once "functions.php";

$name = "connexion";
$values = "id_utilisateur INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, pseudo VARCHAR(20), motdepasse VARCHAR(100), mail VARCHAR(100)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "personnel";
$values = "id_utilisateur INT(10) PRIMARY KEY, nom VARCHAR(20), prenom  VARCHAR(20), age TINYINT(4), scolaire CHAR(4), anniversaire DATE, date_insc DATE";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

?>