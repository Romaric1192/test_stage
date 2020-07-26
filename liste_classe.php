
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="réseau social avec php">
    <meta name="author" content="Romaric and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
   
    <title>Mon Application</title>

    <!-- Bootstrap core CSS-->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
 <link rel="stylesheet" type="text/css" href="vue/main.css">
    <!-- Favicons -->

    <style>
      
    </style>
    <!-- Custom styles for this template -->
    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navigation">
  <a class="navbar-brand" href="#">plateforme d'information</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navigation" href="../index.php">Accueil<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navigation" href="../vue/inscription.php" title="vous allez créer un nouveau compte!">Inscription</a>
      </li>
      <li class="nav-item active">
      </li>
    </ul>
    
  </div>
</nav><br><br><br>

<?php
require_once("connexion.php");
$sql = "select * from classe";
$traitement = $connection->prepare($sql);
$traitement ->execute();
if($traitement){
    
    foreach($traitement as $row){
        
        echo'<table>
        <tr>
        <th>nom de la classe</th><th></th><th>nombre de place</th><th></th><th>niveau</th>
        </tr>
        <tr>
        <td>'.$row["nom_classe"].'</td><td></td><td>'.$row["nombre_de_place"].'</td><td></td><td>'.$row["niveau_classe"].'</td>
        </tr>
        
        </table>';
    }
    
}else{
    
    echo"failed to select!";
}
/*while($traitement = $sql->fetch()){
    
    echo'<table>
    <tr>
        <th>nom de la classe</th><th></th><th>nombre de place</th><th></th><th>niveau</th>
        </tr>
        <tr>
        <td>'.$traitement['nom_classe'].'</td><th></th><td>'.$traitement['nombre_de_place'].'</td><th></th><td>'.$traitement['niveau_classe'].'</td>
        </tr>
    
    </table>';
    echo $traitement['nom_classe'];
}
$traitement-> closeCursor();
}*/
?>
    </body>
</html>