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
        <a class="nav-link navigation" href="../model/inscription.php" title="vous allez créer un nouveau compte!">Inscription</a>
      </li>
      <li class="nav-item active">
      </li>
    </ul>
    
  </div>
</nav>
      <br><br><br>
	
	<h1 class="titre">inscription etudiant</h1>
<div class="form-group">
	
	<form method="POST" action="../model/inscrire_etudiant.php" class="well col-md-6 col-offset-md-3" autocomplete="off">
	<label for="nom" class="control-label">nom</label>
	<input type="text" name="nom" required="required" class="form-control " /><br>
	<label for="prenom" class="control-label">prenom</label>
	<input type="text" name="prenom" required="required" class="form-control " /><br>
	<label for="date de naissance" class="control-label">date de naissance</label>
	<input type="date" name="naissance" required="required" class="form-control " /><br>
	<label for="sexe" class="control-label">sexe</label>
	<input type="text" name="sexe" required="required" class="form-control " /><br>
	<label for="lieu de naissance" class="control-label">lieu de naissance</label>
	<input type="text" name="lieu" required="required" class="form-control "  /><br>
	<label for="nationalité" class="control-label">nationalité</label>
	<input type="text" name="nationalité" placeholder="camerounaise" class="form-control "  /><br>
    <label for="region d'origine" class="control-label">region d'origine</label>
	<input type="text" name="origine" required="required" class="form-control "  /><br>
    <label for="email" class="control-label">email</label>
	<input type="email" name="email" required="required" class="form-control "  /><br>
    <label for="niveau sollicité" class="control-label">niveau sollicité</label>
	<input type="text" name="niveau" required="required" class="form-control "  /><br>
    <label for="etablissement" class="control-label">etablissement précédent</label>
	<input type="text" name="etablissement" required="required" class="form-control "  /><br>
    <label for="telephone" class="control-label">telephone</label>
	<input type="tel" name="telephone" required="required" class="form-control "  /><br>
    <label for="parents" class="control-label">profession des parents</label>
	<input type="text" name="parents" required="required" class="form-control "  /><br>
	<button class="btn btn-primary" onclick="ControlChamp();" name="submit">enregistrer</button>
</form>
</div>

	
	


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="controleur/main.js"></script>
</body>
</html>