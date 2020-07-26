
<?php
require_once("connexion.php");

$error = [];//ce tableau contiendra les ereurs

//verification des champs du fromulaire
if (isset($_POST['submit'])) {
			if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['naissance']) && !empty($_POST['sexe']) && !empty($_POST['lieu']) &&    !empty($_POST['nationalité']) && !empty($_POST['origine']) && !empty($_POST['email']) && !empty($_POST['niveau']) && !empty($_POST['etablissement']) && !empty($_POST['telephone']) && !empty($_POST['parents'])) {

				$query = "INSERT INTO `etudiant` (`nom_etudiant`, `prenom_etudiant`, `date_de_naissance`, `sexe`, `lieu_de_naissance`, `nationalite`, `region_d_origine`, `email`, `niveau_sollicite`, `etablissement_precedent`, `telephone`, `profession_des_parents`) VALUES ('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['naissance']."', '".$_POST['sexe']."', '".$_POST['lieu']."', '".$_POST['nationalité']."', '".$_POST['origine']."', '".$_POST['email']."', '".$_POST['niveau']."', '".$_POST['etablissement']."', '".$_POST['telephone']."', '".$_POST['parents']."')";
					$statement = $connection->prepare($query);
					$statement ->execute();

				if ($statement) {
						//header("location:../vue/interface_user.php");
						echo "<h1> féliciation!, inscription réussie!</h1>";
					}
			}
			else{
				$error[] ="veuillez remplir tous les champs d'abord";	
					
			}

}
var_dump($_POST);
  ?>