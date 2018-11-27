var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "Ceci est une éolienne. Quelle source d'énergie utilise-t-elle ?", "Le Vent", "L'eau", "Le Soleil", "A" ],
	[ "Voici maintenant un panneau solaire. Sais-tu quelle énergie utilise-t-il ?", "Le Vent", "L'eau", "Le Soleil", "C" ],
	[ "Vois-tu cette petite fille ? Je suis sûr que tu possèdes un vélo identique ! Sais-tu d'où provient l'énergie du vélo ?", "Du vent", "De ses petites jambes", "De son doudou", "B" ],
	[ "Reconnais-tu maintenant ce qu'est cet objet qui fonctionne grâce à la force de l'eau ?", "Une grande roue", "Une horloge", "Un moulin à eau", "C" ],
	["Cette voiture utilise-t-elle des énergies renouvelables ?", "Oui", "Non", "Euh je ne sais pas :(", "B"],
];
var message_rate = ["Raté, mais tu as une deuxième chance !", "NON ! Essaie encore ;)", "Tu y es presque, encore un effort !"]
var message_reussi = ["Bien joué ! Tu es un véritable petit scientifique !", "Oh oui ! Tu m'impréssionnes !", "Yeeees ! Super !"]
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = " ";
		_("test_status").innerHTML = '<h1> <p>Tu as terminé le test ! Merci d\'avoir joué avec moi :) </p> <h1>';
		pos = 0;
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" sur "+questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += '<div align="center"> <img src="Images/energie_'+(pos+1)+'.jpg" alt="photo_question" width=500 heigth=500> 	</div>'
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'>Valider</button>";
}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][4]){
		alert(message_reussi[Math.floor(Math.random() * message_reussi.length)]);
		pos++
	}
	else{
		alert(message_rate[Math.floor(Math.random() * message_rate.length)])
	}
	renderQuestion();
}
window.addEventListener("load", renderQuestion, false);