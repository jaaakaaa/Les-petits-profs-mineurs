<?php

session_start();

$_SESSION = array();

session_destroy();

$adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

echo "<script type='text/javascript'>document.location.replace('/Les-petits-profs-mineurs/index.php');</script>";

?>