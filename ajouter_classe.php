<?php
require_once("connexion.php");

if(isset($_POST['submit'])){
    
    if(!empty($_POST['nom_classe']) && !empty($_POST['nombre_place']) && !empty($_POST['niveau_classe'])){
        
        $query = "INSERT INTO `classe`(`nom_classe`, `nombre_de_place`, `niveau_classe`) VALUES ('".$_POST['nom_classe']."','".$_POST['nombre_place']."','".$_POST['niveau_classe']."')";
        $statement = $connection->prepare($query);
        $statement->execute();
    }
}
if($statement){
    echo"<h1> insertion réussie!</h1>";
}
?>