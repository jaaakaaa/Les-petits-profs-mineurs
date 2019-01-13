<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/Les-petits-profs-mineurs/style.css">
    <script type="application/javascript" src="/Les-petits-profs-mineurs/main.js"></script>
    <meta charset="utf-8">
  </head>
  
  <body style="background: grey;">
    
  <?php 

  $dir = $_SERVER['DOCUMENT_ROOT']."/Les-petits-profs-mineurs/sub_header.php";
  
  require_once $dir;

  ?>
    
    <div style=" background : white; ;border-radius: 10px; overflow-wrap: break-word; padding:5%;">


<p>Il est temps de voir si tu connais bien l'Univers qui nous entoure ! Ne t'inquiète pas c'est pas difficile !

</p>


    <!--  va chercher et execute le fichier test.js -->
  <script type="text/javascript" src="testfinal.js"> </script>
  <h4 id="test_final">Question 1 sur 4</h4>
  <div id="testf" align="center"><h5>Grâce à quoi une fusée décolle ?</h5><input type="radio" name="choixs" value="A">A l’air chaud <br><input type="radio" name="choixs" value="B">L’action réaction<br><input type="radio" name="choixs" value="C">Une explosion<br><br><button onclick="checkAnswer()"> Valider la réponse </button></div>
      
      
    </div>
  </body>
</html>
