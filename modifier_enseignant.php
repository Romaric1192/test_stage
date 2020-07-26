<?php
require_once("connexion.php");

if(isset($_POST['submit'])){
    
    $query = "UPDATE `enseignant` SET `nombre_de_classe_enseigne` = '".$_POST['occupation']."' WHERE `enseignant`.`matricule_enseignant` = '".$_GET[`matricule enseignant`]."' ";
    $traitement = $connection->prepare($query);
    $traitement->execute();
    if($traitement){
        
        echo"<h1>success to update!</h1>";
        
    }else{
        
        echo"<h1>failed to update</h1>";
    }
}
#var_dump($_POST);
#var_dump($_GET);
?>