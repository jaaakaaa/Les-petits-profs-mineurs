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

    <style type="text/css">
button#account {
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

button#account:hover {
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

      <h2 align = 'center'><B> Espace Administrateur </B></h2>

      <script type="text/javascript">         
        function test(pseudo) 
        { 
            alert(pseudo);
        }
        function delete_account(id_utilisateur, pseudo) 
        { 
            if (confirm('Voulez vous vraiment dissoudre la compte de '+ String(pseudo) +' ?'))
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

              param = 'id=' + String(id_utilisateur);
              request.open("GET","delete_account.php?" + param,true);
              request.responseType = "json";
              request.send(null);
            } 
        } 
      </script>

	<?php

	require_once "functions.php";

  $result = queryRequest("SELECT rang, pseudo, mail, id_utilisateur FROM connexion NATURAL JOIN relation WHERE rang!='administrateur' ORDER BY rang");

  $rows = $result->num_rows;

  for ($j = 0; $j < $rows; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    $rang = strval($row[0]);
    $pseudo = strval($row[1]);
    $mail = strval($row[2]);
    $id = strval($row[3]);
    echo "<center> Rang : $rang, Pseudo : $pseudo, e-mail : $mail </center> <br>";

?>
   
<center><button id='account' onclick='test(<?php echo $pseudo; ?>)'>Supprimer le Compte de <?php echo $pseudo; ?> </button></center>

<?php

  }
?>

	</div>
  </div>
</body>
</html>