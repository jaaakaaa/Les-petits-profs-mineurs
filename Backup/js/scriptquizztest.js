var score = 0

function Solve1() {
  document.getElementById("reponse3").style.background='green';
  document.getElementById("reponse2").style.background='red'; 
  document.getElementById("reponse1").style.background='red';
  document.getElementById('score').innerHTML = "Score : " + score
}

function Solve2() {
  document.getElementById("reponse3").style.background='green';
  document.getElementById("reponse2").style.background='red'; 
  document.getElementById("reponse1").style.background='red';
  score = score + 1
  document.getElementById('score').innerHTML = "Score : " + score
}
