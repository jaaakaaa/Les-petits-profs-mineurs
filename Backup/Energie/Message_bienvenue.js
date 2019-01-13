var name

name = prompt('Salut ! Comment t\'appelles-tu jeune scientifique ?')
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	_("presentation").innerHTML += "<p> Salut " + name + "!</p>";
	return false;
}
window.addEventListener("load", renderQuestion, false);