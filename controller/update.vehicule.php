<?php
require_once "database.php";

echo var_dump($_POST);

// test  $_POST non null 
if(!empty($_POST['id_vehicule']))
{  
    // préparation de la requete 
    // $req = $db->prepare("UPDATE vehicule SET marque=:marque,  modele=:modele, couleur=:couleur, immatriculation=:immatriculation WHERE id_vehicule=:idModif");

    $req = $db->prepare("UPDATE vehicule SET marque=:marque,  modele=:modele, couleur=:couleur, immatriculation=:immatriculation  WHERE id_vehicule=:idModif");

    // Assignation des valeurs 
        $idModif = $_POST['id_vehicule'];
        $marque =  $_POST['marque'];
        $modele =  $_POST['modele'];
        $couleur =  $_POST['couleur'];
        $immatriculation =  $_POST['immatriculation'];

    
        $req->bindValue(":idModif", $idModif, PDO::PARAM_INT);
        $req->bindValue(":marque", $marque, PDO::PARAM_STR);
        $req->bindValue(":modele", $modele, PDO::PARAM_STR);
        $req->bindValue(":couleur", $couleur, PDO::PARAM_STR);
       $req->bindValue(":immatriculation", $immatriculation, PDO::PARAM_STR);
   
        
    // Executer la requete
    $result = $req->execute();

    // Cloture 
        $req->closeCursor();

    // Gérer les redirections
            // if ($result) {
            // header("Location: ../vehicules.php");
            // }
            // else{
            // header("Location: ../vehicules.php");
            //     }
}