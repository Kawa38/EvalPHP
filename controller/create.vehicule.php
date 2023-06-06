<?php
// accés à la base de donnée
require_once "database.php";
// echo var_dump($_POST);

if (!empty($_POST['marque'] && !empty($_POST['modele'])&& !empty($_POST['couleur']) && !empty($_POST['immatriculation']))) { // contrôler qu'il y a bien des datas à charger
    // Ajout en BDD
    // préparation de la requete 


    $req = $db->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)");


    // Assignation des valeurs à la requete préparée 
         //NB : avant faire du contrôle 

    $itemMarque = $_POST['marque']; 
    $itemModele = $_POST['modele']; 
    $itemCouleur = $_POST['couleur']; 
    $itemImmatriculation = $_POST['immatriculation']; 

    
    $req->bindValue(":marque", $itemMarque, PDO::PARAM_STR);
    $req->bindValue(":modele", $itemModele, PDO::PARAM_STR);
    $req->bindValue(":couleur", $itemCouleur, PDO::PARAM_STR);
    $req->bindValue(":immatriculation", $itemImmatriculation, PDO::PARAM_STR);

    // Executer la requete préparé 
    $result = $req->execute();


    // Cloture 
    $req->closeCursor();

    // Gérer les redirections
        if ($result) {
            
            header("Location: ../vehicules.php");
            
        }
} else {
    ("Location: ../vehicules.php");
}