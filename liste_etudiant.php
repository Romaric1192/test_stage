
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


        $sql= "select * from etudiant";
        $traitement = $connection->prepare($sql);
        $traitement ->execute();
        if($traitement){

            foreach($traitement as $row){

                echo'<table>
                <tr><th>nom:</th><td>'.$row['nom_etudiant'].'</td></tr>
                <tr><th>prenom:</th><td>'.$row['prenom_etudiant'].'</td></tr>
                <tr><th>date de naissance</th><td>'.$row['date_de_naissance'].'</td></tr>
                <tr><th>sexe:</th><td>'.$row['sexe'].'</td></tr>
                <tr><th>lieu de naissance:</th><td>'.$row['lieu_de_naissance'].'</td></tr>
                <tr><th>nationalité:</th><td>'.$row['nationalite'].'</td></tr>
                <tr><th>region:</th><td>'.$row['region_d_origine'].'</td></tr>
                <tr><th>mail:</th><td>'.$row['email'].'</td></tr>
                <tr><th>niveau sollicité:</th><td>'.$row['niveau_sollicite'].'</td></tr>
                <tr><th>établissement précédent:</th><td>'.$row['etablissement_precedent'].'</td></tr>
                <tr><th>téléphone:</th><td>'.$row['telephone'].'</td></tr>
                <tr><th>profession des parents:</th><td>'.$row['profession_des_parents'].'</td></tr>
                </table>';
            }
        }else{

        echo"failed to select!";
        }
    ?>
    </body>
</html>