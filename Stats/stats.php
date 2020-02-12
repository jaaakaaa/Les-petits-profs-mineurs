<?php
    
    session_start();
    require_once "../Utilisateur/functions.php";
    $id = $_SESSION['id'];
    $result = queryRequest("SELECT rang FROM relation WHERE id_utilisateur='$id'");

    $row = $result->fetch_array(MYSQLI_NUM);
    if ( isset( $id ) and ($row[0]=='administrateur') ) {
    //get viariables from url
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
    $row = $result->fetch_array(MYSQLI_NUM);
    $str = $row[0];
    //put content in array

    $list = explode("_", "$str");
    $array = explode("-", $list[0]);
    $aimé = $array[0];
    $bof = $array[1];
    $pasaimé = $array[2];
    
    $array2 = explode("-", $list[1]);
    $compris = $array2[0];
    $moyen = $array2[1];
    $pascompris = $array2[2];
    
    $totalavis = $aimé+$bof+$pasaimé;
    $totalcomp = $compris+$moyen+$pascompris;
    
    if ($totalavis==0) {
        $like="Pas encore de vote";
    } else {
        $like = ((100*$aimé+50*$bof)/$totalavis)." %";
    }
    if ($totalcomp==0){
         $understanding = "Pas encore de vote";
    }else{
        $understanding = ((100*$compris+50*$moyen)/$totalcomp)." %";
    }
    
	echo '<div id="sondage" style="border: solid;border-radius: 20px;background:white;padding: 20px;"><p>Satisfaction : '.$like.' ( '.$totalavis.' vote(s))<br>Compréhension : '.$understanding.' ( '.$totalcomp.' vote(s))</p></div>'
;    } else {

    
    }
    
?>

