var path = window.location.pathname;
        var L = path.split("/")
        var str = L.pop();
        var page = str.substring(0, str.length - 4);
        var section = L.pop();


function chien() {
    if (page.substr(0,6)=="partie") {
    document.body.innerHTML += "<div id='sondage' style='border: solid;border-radius: 20px; background:white;'><div id='pollavis' style='display: inline-block;'><center>As-tu aimé cet article ?</center><br>Oui <a onclick='getVote(0,0)' style='cursor: pointer;font-size:35px;'>&nbsp;😃 &nbsp;</a>&nbsp;&nbsp;Bof <a onclick='getVote(2,0)' style='cursor: pointer;font-size:35px;'>&nbsp;😐 &nbsp;</a>&nbsp;&nbsp;Non <a onclick='getVote(1,0)' style='cursor: pointer;font-size:35px;'>&nbsp;😣&nbsp; </a></div><div id='pollcomp' style='display: inline-block; float:right;'><center>As-tu compris cet article ?</center><br>Oui <a onclick='getVote(0,1)' style='cursor: pointer;font-size:35px;'>&nbsp;😁 &nbsp;</a>&nbsp;&nbsp;Bof <a onclick='getVote(2,1)' style='cursor: pointer;font-size:35px;'>&nbsp;🤔 &nbsp;</a>&nbsp;&nbsp;Non <a onclick='getVote(1,1)' style='cursor: pointer;font-size:35px;'>&nbsp;🤨&nbsp;</a></div>   </div>"
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.body.innerHTML += this.responseText;
    }
  }
  xmlhttp.open("GET","/Les-petits-profs-mineurs/Stats/stats.php?&nomarticle="+String(page)+"&section="+String(section),true);
  xmlhttp.send();
    }
}

$(window).load(chien)


function getVote(int,n) {
    var str
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    
      document.getElementById("poll"+str).innerHTML=this.response;
    }
  }
  if (n === 0) {
      str ='avis'
  xmlhttp.open("GET","/Les-petits-profs-mineurs/Stats/poll_avis.php?vote="+int+"&nomarticle="+String(page)+"&section="+String(section),true);
  xmlhttp.send();
} else {
    str = 'comp'
    xmlhttp.open("GET","/Les-petits-profs-mineurs/Stats/poll_comp.php?vote="+int+"&nomarticle="+String(page)+"&section="+String(section),true);
  
  xmlhttp.send();
}}
