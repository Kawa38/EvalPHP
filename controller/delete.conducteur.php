<?php
// accés à la base de donnée
require_once "database.php";
    //echo var_dump($_POST['id']);

// test  $_POST[id] non null 
if(!empty($_POST['id']))
{
    // préparation de la requete 
    $req = $db->prepare("DELETE FROM conducteur WHERE id_conducteur = :id_conducteur");

    // Assignation de la valeur 
    $idItem = $_POST['id'];
    $req->bindValue(":id_conducteur",$idItem, PDO::PARAM_INT);
    // Executer la requete
    $result = $req->execute();

    // Cloture 
    $req->closeCursor();


// Gérer les redirections

if ($result) {
   header("Location: ../conducteurs.php");}
} else {
  header("Location: ../conducteurs.php");
}
