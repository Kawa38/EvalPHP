<?php
// accés à la base de donnée
require_once "database.php";
    //echo var_dump($_POST['id']);

// test  $_POST[id] non null 
if(!empty($_POST['id']))
{
    // préparation de la requete 
    $req = $db->prepare("DELETE FROM vehicule WHERE id_vehicule = :id_vehicule");

    // Assignation de la valeur 
    $idItem = $_POST['id'];
    $req->bindValue(":id_vehicule",$idItem, PDO::PARAM_INT);
    // Executer la requete
    $result = $req->execute();

    // Cloture 
    $req->closeCursor();


// Gérer les redirections

if ($result) {
   header("Location: ../vehicules.php");}
} else {
  header("Location: ../vehicules.php");
}
