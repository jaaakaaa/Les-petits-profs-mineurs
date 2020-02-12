<?php 
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
    $id = $_SESSION['id'];
    //Connection à la base de données

	require_once 'Utilisateur/login.php';

	$conn = new mysqli($hostnetwork,$username,$password,$database);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $n = $_REQUEST['Numeroquiz'];
    $section = $_REQUEST['section'];
    $score = $_REQUEST['score']*10; //on dilate car le type stocké dans la BD est int
    
    
    $sql = "UPDATE quizz".$section." SET quizz".$n."=".$score." WHERE id_utilisateur=".$id;


    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    } else {

    
    }
    
    
	
?>