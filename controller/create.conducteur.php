<?php
// accés à la base de donnée
require_once "database.php";
echo var_dump($_POST);

if (!empty($_POST['nom'] && !empty($_POST['prenom']))) { // contrôler qu'il y a bien des datas à charger
    // Ajout en BDD
    // préparation de la requete 


    $req = $db->prepare("INSERT INTO conducteur (nom, prenom) VALUES (:nom, :prenom)");


    // Assignation des valeurs à la requete préparée 
         //NB : avant faire du contrôle 

    $itemName = $_POST['nom']; 
    $itemPrenom = $_POST['prenom']; 

    
    $req->bindValue(":nom", $itemName, PDO::PARAM_STR);
    $req->bindValue(":prenom", $itemPrenom, PDO::PARAM_STR);

  
    // Executer la requete préparé 
    $result = $req->execute();


    // Cloture 
    $req->closeCursor();

    // Gérer les redirections
        if ($result) {
            
            header("Location: ../conducteurs.php");
        }
} else {
    //header("Location: ../conducteurs.php");
}