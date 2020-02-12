<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "resultat_comp_partieun.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$compris = $array[0];
$bof = $array[1];
$comprisR = $array[2];

if ($vote == 0) {
  $compris = $compris + 1;
}
if ($vote == 1) {
  $comprisR = $comprisR + 1;
}

if ($vote == 2) {
  $bof = $bof + 1;
}

//insert votes to txt file
$insertvote = $compris."||".$bof." ||".$comprisR;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<h2>Merci !</h2>