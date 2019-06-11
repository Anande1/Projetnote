<?php
sesion_start();

$date="";
$module="";
$heure="";
$resume="";
$idee="";
$rappel="";

$date_$_POST['date'];
$id_module=$_POST['module'];
$heure=$_POST['heure'];
$resume=$_POST['resume'];
$idee=$_POST['idee'];
$rappel=$_POST['rappel'];

//paramètres bdd

$hotsname="localhost";
$username="root";
$password="";

//conexion à la bdd

$db=new PDO("mysql:host=$hostname;dbname=note_db", $username, $password);

// récupération des varaibales de session

$ID= $_SESSION['id_user'];

//preparation de l'enregistrement dans la bdd!

$sql2= "INSERT INTO note VALUES('','$date', '$idee', '$resume', '$id_Module', '$ID')";

//execution de l'enregistrement dans la bdd


$db->exec($sql2);

echo "\nPDOStatement:errorInfo():\n";

$arr= $db->erorInfo();
print_r($arr);

echo"<script>alert(\les données sont bien enregistrées, à bientôt")
include("accueil.php");

?>