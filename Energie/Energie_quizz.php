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
      
   <div id="corpus">
    <h1> Les différentes sources d'énergie </h1>

    <div id="intro">
      <p> Il est maintenant temps de voir tout ce que tu sais. Sauras-tu répondre à mes questions ?  </p>
    </div>

      <!-- insérer une image -->
      <div align="center"> <img src="Images/tesla11.png" alt="Professeur tesla" width="100" heigth="100">
      </div>
          <script type="text/javascript" src="Quizz1.js"> </script>
    <h2 id="test_status">Question 1 sur 5</h2>
    <div id="test" align="center"><h3>Ceci est une éolienne. Quelle source d'énergie utilise-t-elle ?</h3><div align="center"> <img src="Images/energie_1.jpg" alt="photo_question" width="500" heigth="500">   </div><input type="radio" name="choices" value="A"> Le Vent<br><input type="radio" name="choices" value="B"> L'eau<br><input type="radio" name="choices" value="C"> Le Soleil<br><br><button onclick="checkAnswer()">Valider</button></div>


</div>
      
    </div>
  </body>
</html>
