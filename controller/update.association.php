<?php
require_once "database.php";

// test  $_POST[id] non null 
if(!empty($_POST['id_conducteur']))
{  
    // préparation de la requete 
    $req = $db->prepare("UPDATE association_vehicule_conducteur SET id_vehicule=:id_vehicule, id_conducteur=:id_conducteur  WHERE id_association=:idModif");

    // Assignation dez valeurs 
        $idModif = intval($_POST['id_conducteur']);
        $id_vehicule =  $_POST['id_vehicule'];
        $id_conducteur = $_POST['id_conducteur'];
    
        $req->bindValue(":idModif", $idModif, PDO::PARAM_INT);
        $req->bindValue(":id_vehicule", $id_vehicule, PDO::PARAM_STR);
        $req->bindValue(":id_conducteur", $id_conducteur, PDO::PARAM_STR);
        
    // Executer la requete
    $result = $req->execute();

    // Cloture 
        $req->closeCursor();

    // Gérer les redirections
            if ($result) {
            header("Location: ../associations.php");
            }
            else{
            header("Location: ../associations.php");
                }
}