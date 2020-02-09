<?php 

require_once "functions.php";

$id = $_SESSION['id'];

$result = queryRequest("SELECT rang FROM relation WHERE id_utilisateur='$id'");

$row = $result->fetch_array(MYSQLI_NUM);

if ($row[0] == 'argonaute')
{
echo <<<_END
    <div id='cssmenu'>
         <ul>
         <li><a href='userspace.php'><span>Espace Utilisateur</span></a></li>
         <li><a href='graph.php'><span>Progression</span></a></li>    
         </ul>
    </div>
_END;
}
elseif ($row[0] == 'eleve')
{
echo <<<_END
    <div id='cssmenu'>
         <ul>
         <li><a href='userspace.php'><span>Espace Utilisateur</span></a></li>
         <li><a href="#"><span>Espace Eleve</span></a></li>   
         <li><a href='graph.php'><span>Progression</span></a></li>    
         </ul>
    </div>
_END;
}
elseif ($row[0] == 'professeur')
{
echo <<<_END
    <div id='cssmenu'>
         <ul>
         <li><a href='userspace.php'><span>Espace Utilisateur</span></a></li>  
         <li><a href='teacherspace.php'><span>Espace Professeur</span></a></li>
         <li><a href='graph.php'><span>Progression</span></a></li>    
         </ul>
    </div>
_END;
}
elseif ($row[0] == 'administrateur')
{
echo <<<_END
    <div id='cssmenu'>
         <ul>
         <li><a href='userspace.php'><span>Espace Utilisateur</span></a></li>
         <li><a href="#"><span>Espace Classe</span></a></li>   
         <li><a href='adminspace.php'><span>Espace Administrateur</span></a></li>
         <li><a href='graph.php'><span>Progression</span></a></li>    
         <li><a href="#"><span>Statistiques</span></a></li>
         <li><a href="commentaires.php"><span>Commmentaires</span></a></li>
         </ul>
    </div>
_END;
}
?>