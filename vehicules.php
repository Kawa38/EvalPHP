
<?php require_once "./partials/header.php";


// récupératation de $vehicules #}
require_once "./controller/read.vehicules.php";

//affichage liste
echo '<h2>Liste des véhicules</h2>';
require_once "./partials/list.vehicules.php" ;

//affichage formulaire
echo '<h2>Ajouter un véhicule</h2>';
require_once "./partials/new.vehicule.php"; 

// affichage footer
require_once "./partials/footer.php"

?>

