var pos = 0, test, test_status, question, choix, choixs, chA, chB, chC, correct = 0;
var questions = [
	["Comment fait-on du blanc en synthèse additive ?", "On mélange les 3 couleurs primaires", "On mélange Bleu et Vert", "On mélange Rouge et Bleu", "A"],
	["Que se passe-t-il si on mélange les 3 couleurs primaires en synthèse soustractive ?", "Cela fait du Rouge", "Cela fait du Noir", "Cela fait du Blanc", "B"],
	["Je suis en vacances sur la plage. Je peux dessiner un crabe avec des pinceaux. Quelle synthèse va me servir ?", "La synthèse additive", "La synthèse additive et soustractive", "La synthèse soustractive", "C"]
];

function _(x){return document.getElementById(x);}
function afficheQuestion(){ 
	test = _("test");
	if (pos>= questions.length){
		test.innerHTML = "<h2> Tu as " + correct + " réponses correctes sur " + questions.length +"😃" +"</h2>";
		_("test_status").innerHTML = "Test terminé";
		// si on veut que l'on puisse recommencer le test
		//pos =0 ;
		//correct = 0;
		return false;
	}

	_("test_status").innerHTML = "Question " + (pos+1) + " sur " + questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h5>" + question + "</h5>";
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