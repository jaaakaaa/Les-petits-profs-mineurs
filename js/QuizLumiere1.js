var score = 0

var questions = [
	["Si un objet est bleu, quelle est la couleur qu'il absorbe ?", "Orange", "Vert", "Rouge", "1"],
	["Si je plonge mon tuba dans la mer, comment apparaît-il ?", "Plié", "Cassé", "Droit", "2"],
	["Que faut-il pour créer un arc-en-ciel ?", "Des gouttes d'eau", "De la lumière", "Les deux","les trois", "3"]
];

var QenCours = -1
var coef = 1


function Solve(x) {
    if (x == questions[QenCours][questions[QenCours].length-1]) {
        document.getElementById("reponse"+x).style.background='green';
        score = score + coef;
        for (var i = 1; i < questions[QenCours].length-1; i++) {
            document.getElementById("reponse"+i).disabled = true;
        }
        document.getElementById('score').innerHTML = "Score : " + score;
    } else {
        if (coef == 0.5) {
            for (var j = 1; j < questions[QenCours].length-1; j++) {
    document.getElementById("reponse"+j).style.background='red';
            }
    document.getElementById("reponse"+questions[QenCours][questions[QenCours].length-1]).style.background='green';
        
        for (var q = 1; q < questions[QenCours].length-1; q++) {
        document.getElementById("reponse"+q).disabled = true;
        }
        } else {
    document.getElementById("reponse"+x).style.background='red'
    document.getElementById("reponse"+x).disabled = true;
    coef = 0.5
    }
        
    }

    document.getElementById('score').innerHTML = "Score : " + score;
}

function Suivant(){
    
        document.getElementById("quiz").innerHTML = "<div id='score' style='float:right;' >Score : "+ score+"</div>";
    document.getElementById("quiz").innerHTML += "<p style='float:left' >Question "+( QenCours+2)+" sur "+questions.length+"<p>";
    coef = 1
    QenCours = QenCours + 1
    
    if (QenCours >= questions.length) {
        document.getElementById("quiz").innerHTML = "BRAVO ! Tu as terminé le quiz !<br>Tu as obtenu un score de "+score+"/"+questions.length;
        if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","/Les-petits-profs-mineurs/resultattoDB.php?section=Lumiere&Numeroquiz=1&score="+String(score),true);
        xmlhttp.send();
        } else {
    document.getElementById("quiz").innerHTML += "<h1 id='Q1'></h1>";
    document.getElementById("quiz").innerHTML += "<hr align='center' width='50%' color='grey' size='5'>"
    document.getElementById("quiz").innerHTML += "<button  style='position: absolute;right: 90px;border: none;width: 50px;height: 50px;' onclick='Suivant()'>→</button></div>";
    for (var k = 1; k < questions[QenCours].length-1; k++) {
 document.getElementById("quiz").innerHTML += "<div style='text-align:center;display:inline-block'><button id='reponse"+k+"' onclick='Solve("+k+")'></button></div>"}
    
    
document.getElementsByTagName("h1")[1].id = "Q"+ QenCours
document.getElementsByTagName("h1")[1].innerHTML = questions[QenCours][0]

for (var h = 1; h < questions[QenCours].length-1; h++) {
document.getElementById("reponse"+h).innerHTML = questions[QenCours][h]
    
}
}

}
