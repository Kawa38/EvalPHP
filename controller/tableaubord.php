<?php
require_once "database.php";

//Préparation des requétes pour le tableau de bord et fonction d'éxécution
//Liste des véhicules avec conducteur

    $reqVehiculeAvecConducteur = $db->prepare(
    "SELECT * FROM vehicule 
    JOIN association_vehicule_conducteur ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
    JOIN conducteur ON association_vehicule_conducteur.id_conducteur = conducteur.id_conducteur
    ");

//Véhicules sans conducteurs
    $reqVehiculeSansConducteur = $db->prepare(
    "SELECT * FROM vehicule 
    LEFT JOIN association_vehicule_conducteur ON vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
    WHERE association_vehicule_conducteur.id_vehicule IS NULL
    ");


//Conducteurs sans véhicules
$reqConducteurSansVehicule = $db->prepare(
    "SELECT * FROM conducteur 
    LEFT JOIN association_vehicule_conducteur ON conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
    WHERE association_vehicule_conducteur.id_conducteur IS NULL
    ");


function executerequete($req){
    // Exécution de la requete 
    $req->execute();
    // traitement des résultats
    $liste = $req->fetchAll(PDO::FETCH_ASSOC);
    //Ferme le curseur, permettant à la requête d'être de nouveau exécutée
    $req->closeCursor();
    //vérif résulat
    //var_dump($liste);
    return $liste;
}
