<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "resultat_avis_partieun.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$aimé = $array[0];
$bof = $array[1];
$pasaimé = $array[2];

if ($vote == 0) {
  $aimé = $aimé + 1;
}
if ($vote == 1) {
  $pasaimé = $pasaimé + 1;
}
if ($vote == 2) {
  $bof = $bof + 1;
}

//insert votes to txt file
$insertvote = $aimé."||".$bof."||".$pasaimé;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Merci pour ton vote !</h2>