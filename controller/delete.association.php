<?php
// accés à la base de donnée
require_once "database.php";
// echo var_dump($_POST);

// test  $_POST[id] non null 
if(!empty($_POST['id']))
{
  echo "test"; 
  // préparation de la requete 
    $req = $db->prepare("DELETE FROM association_vehicule_conducteur WHERE id_association = :id_association");

    // Assignation de la valeur 
    $idItem = $_POST['id'];
    $req->bindValue(":id_association",$idItem, PDO::PARAM_INT);
    // Executer la requete
    $result = $req->execute();

    // Cloture 
    $req->closeCursor();


// Gérer les redirections

if ($result) {
  header("Location: ../associations.php");}
} else {
  header("Location: ../associations.php");
}
