<?php
// récupération de l'objet conducteur



require_once "../controller/read.conducteurs.php";



if (!empty($_POST['id_vehicule'] && !empty($_POST['id_conducteur']))) { // contrôler qu'il y a bien des datas à charger
    // Ajout en BDD
    // préparation de la requete 


    $req = $db->prepare("INSERT INTO association_vehicule_conducteur (id_vehicule, id_conducteur) VALUES (:idvehicule, :idconducteur)");


    // Assignation des valeurs à la requete préparée 
         //NB : avant faire du contrôle 

    $id_vehicule = $_POST['id_vehicule']; 
    $id_conducteur = $_POST['id_conducteur']; 

    
    $req->bindValue(":idvehicule", $id_vehicule, PDO::PARAM_INT);
    $req->bindValue(":idconducteur", $id_conducteur, PDO::PARAM_INT);

  
    // Executer la requete préparé 
    $result = $req->execute();


    // Cloture 
    $req->closeCursor();

    // Gérer les redirections
        if ($result) {
            
         header("Location: ../conducteurs.php");
        }
      } else {
      header("Location: ../conducteurs.php");
}