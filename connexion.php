<?php

$server = "localhost";
$db = "stage";
$user = "root";
$password = "";
//$host = "mysql:host=".$server." "; dbname = ".$db.";
try{
//$conection = new PDO($host,"root","");
	$connection = new PDO("mysql:dbname=".$db."", "root","");
	/*if($connection){
		echo "yes you are connected to the db ".$db."";
	}*/

}
catch(PDOException $error){
	//echo"failed to connect:".$error."";
	die($error -> getMessage());
}
?>