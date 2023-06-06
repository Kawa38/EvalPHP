<?php

require_once "database.php";


// Préparation de la requete 
$req = $db->prepare("SELECT * FROM association_vehicule_conducteur");
// Exécution de la requete 
$req->execute();

// traitement des résultats
$associations = $req->fetchAll(PDO::FETCH_ASSOC);

//Ferme le curseur, permettant à la requête d'être de nouveau exécutée
$req->closeCursor();

//vérif résulat
//var_dump($associations);