
<?php
require_once("connexion.php");

$error = [];//ce tableau contiendra les ereurs

//verification des champs du fromulaire
if (isset($_POST['submit'])) {
			if (!empty($_POST['matricule']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['classe'])) {

				$query = "INSERT INTO `enseignant`(`matricule_enseignant`, `nom`, `prenom`, `nombre_de_classe_enseigne`) VALUES ('".$_POST['matricule']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['classe']."')";
					$statement = $connection->prepare($query);
					$statement ->execute();

				if ($statement) {
						//header("location:../vue/interface_user.php");
						echo "<h1> féliciation! inscription réussie!</h1>";
					}
			}
			else{
				$error[] ="veuillez remplir tous les champs d'abord";	
					
			}

}
#var_dump($_POST);
  ?>