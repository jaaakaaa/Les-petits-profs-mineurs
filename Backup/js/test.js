var pos = 0, test, test_status, question, choix, choixs, chA, chB, chC, correct = 0;
var questions = [
	["Quelle image correspond à l'état gazeux?", "Image bleue", "Image rose", "Image verte", "A"],
	["Quelle image correspond à l'état liquide?", "Image bleue", "Image rose", "Image verte", "B"],
	["Quelle image correspond à l'état solide?", "Image bleue", "Image rose", "Image verte", "C"]
];

function _(x){return document.getElementById(x);}
function afficheQuestion(){ 
	test = _("test");
	if (pos>= questions.length){
		test.innerHTML = "<h2> Tu as terminé le test. Bravo! Passe à la suite. </h2>";
		_("test_status").innerHTML = "Test terminé";
		// si on veut que l'on puisse recommencer le test
		//pos =0 ;
		//correct = 0;
		return false;
	}

	_("test_status").innerHTML = "<h3> Question " + (pos+1) + " sur " + questions.length + "</h3>";
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h2>" + question + "</h2>";
	test.innerHTML += "<input type='radio' name='choixs' value='A'>" + chA + "<br>";
	test.innerHTML += "<input type='radio' name='choixs' value='B'>" + chB + "<br>";
	test.innerHTML += "<input type='radio' name='choixs' value='C'>" + chC + "<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'> Valider la réponse </button>";

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
	else{alert("Mauvaise réponse. Essaie encore.")}
	afficheQuestion();
}

window.addEventListener("load", afficheQuestion, false);
