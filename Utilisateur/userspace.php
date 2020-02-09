<?php

session_start();

if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://www.mineurs.5gbfree.com/Les-petits-profs-mineurs/Utilisateur/log_in.php");
}
?>


<!DOCTYPE html>
<html>
    
  <head>
    <?php require_once $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/head.php"; ?>
    
    <link rel="stylesheet" type="text/css" href="profil.css">


    <style>

div#top #left {
    float:left;
    width:50%;
}

div#top #right {    
    width:50%;
    margin-left:50%    
}

button#classroom,#profilModif {
  background-color: #46484B;
  border: 2px solid #46484B;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 50px;
  cursor: pointer;
  transition-duration: 0.4s;
  font-family: "Londrina Solid", sans-serif;
}

button#profilModif {
  padding: auto;
}

button#classroom:hover,#profilModif:hover {
  background-color: #FFFFFF;
  color: #46484B;
  border: 2px solid #46484B;
}

</style>

  </head>
    
    <body>

  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>

  <div id = 'main'>

    <?php require_once "menu_profil.php" ?>

    <div id = 'contenu' style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">

	<?php

	require_once "functions.php";

	$result = queryRequest("SELECT * FROM connexion NATURAL JOIN personnel WHERE id_utilisateur='$id'");

	$row = $result->fetch_array(MYSQLI_NUM);

	$row[9] = date("d/m/Y", strtotime($row[9]));

// Gestion du Compte : Modification du Pseudo, Mdp, mail, Ajouter une photo de profil 

echo <<<_END

  <div id='top'>

  <h2 align = 'center'><B> Espace personnel </B></h2>

  <div id='left'>
	<fieldset>
	<legend> Informations Personnelles </legend><br>
	<table align ='center'>
     	<tr>
           <td>Nom :</td>
           <td>$row[5]</td>
       	</tr>
       	<tr>
           <td>Prénom :</td>
           <td>$row[6]</td>
       	</tr>
       	<tr>
           <td>Age :</td>
           <td>$row[7]</td>
       	</tr>
       	<tr>
           <td>Niveau Scolaire :</td>
           <td>$row[8]</td>
       	</tr>
       	<tr>
           <td>Anniversaire :</td>
           <td>$row[9]</td>
       	</tr>
	</table>
	</fieldset>
	</td></tr>
	<tr><td>
	<fieldset>
	<legend> Informations Compte </legend><br>
	<table align = 'center'>
       	<tr>
           <td>Pseudo :</td>
           <td>$row[1]</td>
       	</tr>
       	<tr>
           <td>e-Mail :</td>
           <td>$row[3]</td>
       	</tr>
	</table>
	</fieldset>

  </div>

  <div id='right'>
  <br>
  <center><button id="profilModif" onclick="document.location.replace('profil_modif_pseudo.php');"> Modifier mon pseudo </button></center>
  <br>
  <center><button id="profilModif" onclick="document.location.replace('profil_modif_mail.php');"> Modifier mon adresse mail  </button></center>
  <br>
  <center><button id="profilModif" onclick="document.location.replace('profil_modif_mdp.php');"> Modifier mon mot de passe </button></center>
  <br><br>
  </div>
  </div>
_END;

echo <<<_END

<script type="text/javascript"> 
function create() 
{ 
    if (confirm('Voulez vous vraiment créer une classe ?'))
    {
      request = new ajaxRequest();

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
          if (this.status == 200)
          {
            var res = this.response;
            console.log(this.response);
            if (res.state == 0) 
            {
              alert(res.msg);
            }
            else if (res.state == 1)
            {
              alert(res.msg);
              location.reload();
            }
          }
          else alert("Erreur Ajax :" + this.statusText);
        }
      };

      param = 'id=' + '$id';
      request.open("GET","create_class.php?" + param,true);
      request.responseType = "json";
      request.send(null);
    } 
} 

function destroy() 
{ 
    if (confirm('Voulez vous vraiment dissoudre la classe ?'))
    {
      request = new ajaxRequest();

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
          if (this.status == 200)
          {
            var res = this.response;
            console.log(this.response);
            if (res.state == 0) 
            {
              alert(res.msg);
            }
            else if (res.state == 1)
            {
              alert(res.msg);
              location.reload();
            }
          }
          else alert("Erreur Ajax :" + this.statusText);
        }
      };

      param = 'id=' + '$id';
      request.open("GET","destroy_class.php?" + param,true);
      request.responseType = "json";
      request.send(null);
    } 
} 

function join() 
{ 
    if (confirm('Voulez vous vraiment rejoindre une classe ?'))
    {
      request = new ajaxRequest();

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
          if (this.status == 200)
          {
            var res = this.response;
            console.log(this.response);
            if (res.state == 0) 
            {
              alert(res.msg);
            }
            else if (res.state == 1)
            {
              alert(res.msg);
              location.reload();
            }
          }
          else alert("Erreur Ajax :" + this.statusText);
        }
      };

      param = 'id=' + '$id' +'&id_classe=' + prompt("Quel est le code d'accès ?");
      request.open("GET","join_class.php?" + param,true);
      request.responseType = "json";
      request.send(null);
    } 
} 

function leave() 
{ 
    if (confirm('Voulez vous vraiment quitter la classe ?'))
    {
      request = new ajaxRequest();

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
          if (this.status == 200)
          {
            var res = this.response;
            console.log(this.response);
            if (res.state == 0) 
            {
              alert(res.msg);
            }
            else if (res.state == 1)
            {
              alert(res.msg);
              location.reload();
            }
          }
          else alert("Erreur Ajax :" + this.statusText);
        }
      };

      param = 'id=' + '$id';
      request.open("GET","leave_class.php?" + param,true);
      request.responseType = "json";
      request.send(null);
    } 
} 

function ajaxRequest()
{
  try { var request = new XMLHttpRequest() }
  catch(e1) {
    try { request = new ActiveXObject("Msxml2.XMLHTTP")}
    catch(e2) {
      try { request = new ActiveXObject("Microsoft.XMLHTTP") }
      catch(e3) {
        request = false;
  }}}
  return request;
}
</script>


_END;

  $result = queryRequest("SELECT age, rang FROM personnel NATURAL JOIN relation WHERE id_utilisateur='$id'");

  $row = $result->fetch_array(MYSQLI_NUM);

  if ($row[1] != 'administrateur')
  {
    echo "<div id='bottom'><h2 align = 'center'><B> Espace Classe </B></h2>";
  }

  if ($row[1] == 'argonaute')
  {
    if ($row[0] >= 20)
    {
      echo '<br><center><button id="classroom" onclick="create();"> Créer une classe </button>     <button id="classroom" onclick="join();"> Rejoindre une classe </button></center><br></div>';
    }
    else
    {
      echo '<br><center><button id="classroom" onclick="join();"> Rejoindre une classe </button></center><br></div>';
    }
  }
  elseif ($row[1] == 'professeur')
  {
    $result = queryRequest("SELECT id_classe FROM relation WHERE id_utilisateur='$id'");
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<br><br><center> Vous êtes actuellement professeur !<br> Fournissez le code suivant à vos élèves pour qu'ils puissent rejoindre votre classe.<br> Code :".$row[0]."   </center><br>";

    echo '<br><center><button id="classroom" onclick="destroy();"> Dissoudre la classe </button></center><br></div>';
  }
  elseif ($row[1] == 'eleve')
  {
    $result = queryRequest("SELECT id_classe FROM relation WHERE id_utilisateur='$id'");
    $row = $result->fetch_array(MYSQLI_NUM);
    $id_classe = $row[0];
    $result = queryRequest("SELECT pseudo FROM relation NATURAL JOIN connexion WHERE id_classe='$id_classe' AND rang='professeur'");
    $row = $result->fetch_array(MYSQLI_NUM);
    echo '<center> Vous êtes actuellement dans la classe de Prof. '.$row[0].' </center>';
    echo '<br><center><button id="classroom" onclick="leave();"> Quitter la classe </button></center><br></div>';
  }

	?>
	</div>
  </div>
</body>
</html>