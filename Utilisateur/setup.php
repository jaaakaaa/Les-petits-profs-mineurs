<?php 



require_once "functions.php";





$name = "connexion";
$values = "id_utilisateur INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, pseudo VARCHAR(20), motdepasse VARCHAR(100), mail VARCHAR(100), autorisation BOOLEAN";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "personnel";
$values = "id_utilisateur INT(10) PRIMARY KEY, nom VARCHAR(20), prenom  VARCHAR(20), age TINYINT(4), scolaire CHAR(4), anniversaire DATE, date_insc DATE";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "relation";
$values = "id_utilisateur INT(10) PRIMARY KEY, rang VARCHAR(20), id_classe INT(8)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzMatiere";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzOptique";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzEnergie";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzSVT";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzEspace";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

$name = "quizzMaths";
$values = "id_utilisateur INT(10) PRIMARY KEY, quizz1 TINYINT(3), quizz2 TINYINT(3), quizz3 TINYINT(3), quizz4 TINYINT(3), quizz5 TINYINT(3)";

$result = queryRequest("CREATE TABLE IF NOT EXISTS $name($values) CHARSET utf8");

?>