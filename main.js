var width = 0;
var height = 0;

var diff = [


  "#SVT","a.jpg",
  "#quiz","quiz1.jpg",
  "#cd","apropos.jpg",
  "#cc","contact.jpg",
  "#cb","mines.jpg",
  "#matiere","matiereA.jpg",
  "#faune","bq.jpg",
  "#energie","energy.jpg",
  "#baa","q.jpg",
  "#flore","seraj.jpg",
  "#fleurs","im.jpg",
  "#juju","samia.jpg",
  "#optique","opt.jpg",

]

function create_nested_content(cont){
  var cont_cont =  document.querySelector("#content");

  cont_cont.style.background="#EFEFEF";

  // yes i named it cont_cont ,
  // you got a problem with that ?
  cont_cont.innerHTML = '<iframe id="nested-cont" src="'+cont+'"></iframe>';
  bodyresizehandler();
}

function bodyresizehandler(){
  let height = parseInt(window.getComputedStyle(document.body,null).height);
  let width = parseInt(window.getComputedStyle(document.body,null).width);
  document.querySelector("#content").style.width = (width-250)+"px";

  if(document.querySelector("#nested-cont")){
    document.querySelector("#nested-cont").style.width = (width-250)+"px";
    document.querySelector("#nested-cont").style.height = (height-70)+"px";
  }

  document.querySelector("#ov-box").style.left = (width-300)/2+"px";
  document.querySelector("#ov-box").style.top = (height-200)/2+"px";
}

function setPage(ref){
  if(diff.indexOf(ref)==-1){
    document.querySelector("#content").style.background="#EFEFEF";
  }
  else{
    document.querySelector("#content").style.backgroundImage='url("'+diff[diff.indexOf(ref)+1]+'")';
    document.querySelector("#content").style.backgroundSize='cover';
  }
  document.querySelector("#content").innerHTML = document.querySelector(ref).innerHTML;
}

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}

function opensite(url) {
  window.location.href = url;
}