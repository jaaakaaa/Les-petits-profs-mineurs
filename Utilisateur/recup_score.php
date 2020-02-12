<?php

	require_once 'functions.php';

	$quizzMatiere = 0;
	$quizzOptique = 0;
	$quizzEnergie = 0;
	$quizzSVT = 0;
	$quizzEspace = 0;
	$quizzMaths = 0;

 	if (isset($_GET['id']))
	{

		$id = $_GET['id'];

		$quizz = array('quizzMatiere','quizzOptique','quizzEnergie','quizzSVT','quizzEspace','quizzMaths');

		for ($j = 0; $j < count($quizz); ++$j)
		{
			$result = queryRequest("SELECT quizz1, quizz2, quizz3, quizz4, quizz5 FROM $quizz[$j] WHERE id_utilisateur = $id");

			$row = $result->fetch_array(MYSQLI_NUM);

			${$quizz[$j]} = array_sum($row)/count($row);
		}
 	}

 	$res = ['Matiere' => $quizzMatiere,'Optique' => $quizzOptique,'Energie' => $quizzEnergie,'SVT' => $quizzSVT,'Espace' => $quizzEspace,'Maths' => $quizzMaths];

	echo json_encode($res);

?>