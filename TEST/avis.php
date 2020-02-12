<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html>
        <head>
     <?php require_once $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/head.php"; ?>
        </head>
        <script>
        var path = window.location.pathname;
        var str = String(path.split("/").pop())
        var page = str.substring(0, str.length - 4);

function getVote(int,str) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll"+str).innerHTML=this.responseText;
    }
  }
  if (str == 'avis'){
  xmlhttp.open("GET","Stats/poll_avis_"+page+".php?vote="+int,true);
  xmlhttp.send();
} else {
    xmlhttp.open("GET","Stats/poll_comp_"+page+".php?vote="+int,true);
  xmlhttp.send();
}}
</script>
    <body>
    
    <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">
      
      
      <div id="pollavis" style="display: inline-block;">
<h3>As-tu aimé cet article ?</h3>
<form>
Oui :)
<input type="radio" name="vote" value="0" onclick="getVote(this.value,'avis')">
<br>
Bof :|
<input type="radio" name="vote" value="2" onclick="getVote(this.value,'avis')">
<br>
Non :(
<input type="radio" name="vote" value="1" onclick="getVote(this.value,'avis')">
</div>


<div id="pollcomp" style="display: inline-block; float:right;">
</form>
<h3>As-tu compris cet article ?</h3>
<form>
Oui :)
<input type="radio" name="vote" value="0" onclick="getVote(this.value,'comp')">
<br>
Bof :|
<input type="radio" name="vote" value="2" onclick="getVote(this.value,'comp')">
<br>
Non :(
<input type="radio" name="vote" value="1" onclick="getVote(this.value,'comp')">
</form>
</div>

</div>
        
      
    </div>
  </body>
</html>