<?php
    //get viariables from url
    $vote = $_REQUEST['vote'];
    $nomarticle = $_REQUEST['nomarticle'];
    $section = $_REQUEST['section'];
    
    //get content from database
	require_once '../Utilisateur/login.php';
	require_once '../Utilisateur/functions.php';
	
	$conn = new mysqli($hostnetwork,$username,$password,'mineurs_statistique');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $result = queryRequest("SELECT $nomarticle FROM $section WHERE clef=0");
    
    //put content in array
    $row = $result->fetch_array(MYSQLI_NUM);
    $str = $row[0];
    
    //explode everything and fill variables
    $list = explode("_", "$str");
    $array = explode("-", $list[0]);
    $aimé = $array[0];
    $bof = $array[1];
    $pasaimé = $array[2];
    
    $array2 = explode("-", $list[1]);
    $compris = $array2[0];
    $moyen = $array2[1];
    $pascompris = $array2[2];
    
    //increment the vote
if ($vote == 0) {
  $compris = $compris + 1;
}
if ($vote == 1) {
  $pascompris = $pascompris + 1;
}

if ($vote == 2) {
  $moyen = $moyen + 1;
}

//update database
$sql = "UPDATE $section SET $nomarticle='".$aimé."-".$bof."-".$pasaimé."_".$compris."-".$moyen."-".$pascompris."' WHERE clef=0";


    if ($conn->query($sql) === TRUE) {
    echo "Ton vote a bien été pris en compte.";
    } else {
    echo "Erreur, ton vote n'a pas été pris en compte" . $conn->error;
    }

?>




<h2>Merci !</h2>
