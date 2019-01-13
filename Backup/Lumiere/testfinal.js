var pos = 0, testf, test_final, question, choix, choixs, chA, chB, chC, correct = 0;
var questions = [
	["", "", "", "", "A"],
	["", "", "", "", "B"],
	["", "", "", "", "C"]
];

function _(x){return document.getElementById(x);}
function afficheQuestion(){ 
	testf = _("testf");
	if (pos>= questions.length){
		testf.innerHTML = "<h6> Tu as " + correct + " réponses correctes sur " + questions.length + ".</h6>";
		_("test_final").innerHTML = "Test terminé";
		// si on veut que l'on puisse recommencer le test
		pos =0 ;
		correct = 0;
		return false;
	}

	_("test_final").innerHTML = "Question " + (pos+1) + " sur " + questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	testf.innerHTML = "<h5>" + question + "</h5>";
	testf.innerHTML += "<input type='radio' name='choixs' value='A'>" + chA + "<br>";
	testf.innerHTML += "<input type='radio' name='choixs' value='B'>" + chB + "<br>";
	testf.innerHTML += "<input type='radio' name='choixs' value='C'>" + chC + "<br><br>";
	testf.innerHTML += "<button onclick='checkAnswer()'> Valider la réponse </button>";

	}

function checkAnswer(){

	choixs = document.getElementsByName("choixs");
	for (var i=0; i<choixs.length; i++){
		if (choixs[i].checked){
			choix = choixs[i].value;
		}
	}
	// ++ pour +=1 ie incrémente d'une unité
	// ici, possibilité d'essayer à nouveau si mauvaise réponse
	if (choix == questions[pos][4]){
		correct++;
		pos++;}
	else {pos++;}
	afficheQuestion();
}

window.addEventListener("load", afficheQuestion, false);